<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{


    public function index()
    {
        $accounts = User::all(); 
        return view('admin.user.index',compact('accounts'));

    }
}
