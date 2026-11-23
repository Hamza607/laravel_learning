<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return "this is the user controller index function";
    }
    function AddUser()
    {
        return "this is the user controller add function";
    }
    function UserDetails ($name){
        return  "this is the user controller details function for user: $name";
    }
    function showData (){
        return  view("welcome");
    }
    function showUserComponent (){
        return  view("common.user");
    }
    function homeComponent (){
        return  view("layouts.app");
    }
}
