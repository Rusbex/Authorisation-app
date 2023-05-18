<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('home');
    }

    public function index()
    {
        $users = User::all();

        return view('dashboard', compact('users'));
    }
}
