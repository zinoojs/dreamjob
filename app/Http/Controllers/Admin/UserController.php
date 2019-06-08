<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.users.index',compact('users'));
    }
    public function showcv()
    {
        return view('frontend.cvresume');
    }

}
