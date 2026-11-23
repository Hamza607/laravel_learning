<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            "Ali",
            "Ahmed",
            "Hamza",
            "Usman"
        ];

        return view('students', compact('students'));
    }
}
