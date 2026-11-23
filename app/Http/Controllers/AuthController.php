<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login()
    {
        $name = ["Asad", "Ali", "Ahmed"];
        return view("login", ["name" => $name]);
    }
}
