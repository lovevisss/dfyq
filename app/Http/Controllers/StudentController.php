<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Models\MenuItem;
class StudentController extends Controller
{
    public function index()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        return view('students.index',compact('parent_menu'));
    }

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

    public function post_register(Request $request)
    {

        $input = $request->all();
        $input['role_id'] = 3;
        User::create($input);
        return Redirect::route('student.index');
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

    public  function post_message()
    {
        return "posted";
    }
}
