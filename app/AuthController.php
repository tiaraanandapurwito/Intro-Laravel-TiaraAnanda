<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $req) {
        return view('welcome', [
            "first_name" => $req->query('first_name'),
            "last_name" => $req->query('last_name'),
        ]);
    }
}