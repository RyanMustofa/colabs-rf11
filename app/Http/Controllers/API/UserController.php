<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        //example for testing
       $data = User::with('contact_user')->get();
       return JSONFormatter::success($data,'user data successfully retrieved');
    }
}
