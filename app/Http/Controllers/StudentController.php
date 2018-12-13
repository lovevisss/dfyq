<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\MenuItem;
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
        return view('students.register');
    }

    public function term()
    {
        return "term";
    }

    public  function  message()
    {

        $parent_menu = MenuItem::where('id', '=', 15)->first();
        return view('students.message', compact('parent_menu'));
    }
}
