<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login()
    {
        return view('students.login');
    }


    public function post_login()
    {
        return "posted";
    }

    public function register()
    {
        return "register";
    }
}
