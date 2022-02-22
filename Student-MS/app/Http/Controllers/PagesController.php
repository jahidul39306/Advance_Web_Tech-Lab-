<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function app()
    {
        return view('layouts.app');
    }

    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $req)
    {
        $req->validate(
            [
                "email"=>"required|email",
                "password"=>"required"
            ],
            [
        
            ]
        );
        return redirect()->route('home');
    }
}
