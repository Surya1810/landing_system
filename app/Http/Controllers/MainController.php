<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($username)
    {
        $data = User::where('username', $username)->firstOrFail();

        return view('landing', compact('data'));
    }

    public function member($username)
    {
        $data = User::where('username', $username)->firstOrFail();

        return view('profile', compact('data'));
    }
}
