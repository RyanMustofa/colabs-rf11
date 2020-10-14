<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Contact_user;
use Validator;
use Illuminate\Support\Str;
class ProfileController extends Controller
{
    // update profile // update cover // update photo
    public function profile($id =false)
    {
        if(!auth()->user()->id){
            return JSONFormatter::error(null,'Maaf, User tidak ditemukan', 400);
        }else{
            $data = User::where(['id' => auth()->user()->id])->with('contact_user')->with('contact_user')->first();
            return JSONFormatter::success($data,'Data Profile User Berhasil Diambil');
        }
    }
    public function updateProfile(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'whatsapp_number' => 'required|min:8|max:13',
            'link_telegram' => 'required',
            'link_instagram' => 'required',
            'link_facebook'=> 'required'
        ]);
        // jika tidak mempunyai user beberapa sosmed.. dengan memberi tanpa - (tidak boleh kosong)
        if($validator->fails()){
            return JSONFormatter::error($validator->errors(),'Kesalahan input data', 400);
        }
        if(!auth()->user()->id){
            return JSONFormatter::error(null,'Maaf, User tidak ditemukan', 400);
        }else{
            $data = User::where(['id' => auth()->user()->id])->update([
                'name' => $req->name,
                'email' => $req->email,
                'password' => bcrypt($req->password),
                'address' => $req->address,
                'gender' => $req->gender
            ]);
            $data = Contact_user::where(['user_id' => auth()->user()->id])->update([
                'whatsapp_number' => $req->whatsapp_number,
                'link_telegram' => $req->link_telegram,
                'link_instagram'=> $req->link_instagram ,
                'link_facebook' => $req->link_facebook
            ]);
        }
        return JSONFormatter::success($data,'Data Profile User Berhasil Diperbarui');
    }
    public function updateCover(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'cover_user' => 'required|image|mimes:jpg,png,gif,svg,jpeg|max:2048',
        ]);
        if($validator->fails()){
            return JSONFormatter::error($validator->errors(),'Kesalahan input data', 400);
        }
        if(!auth()->user()->id){
            return JSONFormatter::error(null,'Maaf, User tidak ditemukan', 400);
        }else{
            $user = User::findOrfail(auth()->user()->id);
            if($req->hasFile('cover_user')){
                if(file_exists($user->cover_user)){
                    unlink($user->cover_user);
                }
                $file = $req->file('cover_user'); 
                $Image = $file->move('images/user/cover/', time(). '-' . Str::limit(Str::slug('IMG USER COVER'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
            }
            $data = User::where(['id' => auth()->user()->id])->update([
                'cover_user' => !empty($Image) ? $Image : $user->cover
            ]);
            return JSONFormatter::success($data, 'Data Photo Cover User Berhasil Diperbarui');
        }
    }

    public function updatePhoto(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'photo_user' => 'required|image|mimes:jpg,png,gif,svg,jpeg|max:2048',
        ]);
        if($validator->fails()){
            return JSONFormatter::error($validator->errors(),'Kesalahan input data', 400);
        }
        if(!auth()->user()->id){
            return JSONFormatter::error(null,'Maaf, User tidak ditemukan', 400);
        }else{
            $user = User::findOrfail(auth()->user()->id);
            if($req->hasFile('photo_user')){
                if(file_exists($user->photo_user)){
                    unlink($user->photo_user);
                }
                $file = $req->file('photo_user'); 
                $Image = $file->move('images/user/photo/', time(). '-' . Str::limit(Str::slug('IMG USER PROFILE'), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
            }
            $data = User::where(['id' => auth()->user()->id])->update([
                'photo_user' => !empty($Image) ? $Image : $user->cover
            ]);
            return JSONFormatter::success($data, 'Data Photo Profile User Berhasil Diperbarui');
        }
    }

}
