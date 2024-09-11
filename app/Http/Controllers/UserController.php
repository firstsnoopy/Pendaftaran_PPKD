<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        $user = User::get();
        return view('admin.user.create', compact('user'));
    }

}
