<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact_user;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
class AuthController extends Controller
{
    public function login(Request $req)
    {
        try {
            if(!$token = JWTAuth::attempt($req->only('email', 'password'))){
                return response()->json([
                    'code' => 400,
                    'error' => 'Email atau password anda salah'
                ], 400);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'error' => 'Kesalahan tidak bisa membuat token'
                ], 500);
        }
        return response()->json([
            'success' => 'Login berhasil', 
            'code' => 200,
            'token' => $token
        ]);
    }

    public function register(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'photo_user' => 'images/user/photo/default.jpg',
            'cover_user' => 'images/user/cover/default.jpg',
            'gender' => '-',
            'address' => '-',
            'password' => Hash::make($req->get('password')),
        ]);
        Contact_user::create([
            'user_id' => $user->id,
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(
         [
            'success' => 'Registrasi berhasil', 
            'code' => 200,
            'user' => $user,
            'token' => $token
         ],201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }
        return response()->json(compact('user'));
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function profile()
    {
        return response()->json(auth()->user());
    }
    public function logout()
    {
        if(auth()){
            auth()->logout();
            return response()->json(
                [
                   'success' => 'Logout Berhasil', 
                   'code' => 200,
                ],201);
        }
    }
}