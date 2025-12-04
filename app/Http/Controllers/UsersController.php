<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //User::where('email', 'emailmu@gmail.com')->update(['role' => 'admin']);
    public function index()
    {
        return view('Users.users');
    }
}
