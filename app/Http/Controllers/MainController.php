<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\MenuItem;

class MainController extends Controller
{
    public function index()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        return view('index', compact('parent_menu'));
    }
}
