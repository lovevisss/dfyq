<?php

namespace App\Http\Controllers;

use App\Uniclass;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Models\MenuItem;
use App\Http\Requests\UserRegisterRequest;
class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('student.only')->except('login','register','post_login','post_register');
    }

    public function index(Request $request)
    {
//        $request->session()->put(['zsy' => 'author']);
//        session(['yy' => 'data']);
//        session()->forget('yy');
//        return $request->session()->all();
//        session()->flash('message', 'Post has been created');
//        return session()->get('message');
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        $student = Auth::user();
//        $uniclass = Uniclass::lists('year','id')->all();
        return view('students.index',compact('parent_menu', 'student'));
    }

    public function login()
    {
        return view('students.login');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index');
    }


    public function post_login(Request $request)
    {
        $credit = $request->only('email', 'password');
//        dd($credit);
        if(Auth::attempt($credit))
            return Redirect::route('student.index');
        else{
            return Redirect::route('student_login')->with('message', '邮箱或密码错误');
        }
    }

    public function register()
    {
        return view('students.register');
    }

    public function post_register(UserRegisterRequest $request)
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

    public function info()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        $student = Auth::user();
        return view('students.info', compact('parent_menu', 'student'));
    }

    public  function update(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('student_card'))
        {
            $name = date('Y-m-d-H-i-s').'-'.$file->getClientOriginalName();
            $file->move('images/student_card', $name);
            $input['student_card'] = '/images/student_card/'.$name;
        }
        $user = User::find(Auth::id());
        $user->update($input);
        return Redirect::route('student.index');
    }
}
