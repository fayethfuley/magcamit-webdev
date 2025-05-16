<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('templates.login');
    }

    public function handleLogin(Request $request)
    {
        Log::info('LoginController handleLogin ---> START');
                
        # dd($username);
        dd($request);
        
        Log::info('LoginController handleLogin ---> END');
        return redirect()->route('home');
    }
}

