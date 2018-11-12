<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $parent_menu = null;
        return view('index', compact('parent_menu'));
    }
}
