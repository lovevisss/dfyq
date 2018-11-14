<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\MenuItem;
use App\Celebrity;

class MainController extends Controller
{
    public function index()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        return view('index', compact('parent_menu'));
    }

    public function get_celebrity()
    {
        $celebrities = Celebrity::all();
        $parent_menu = MenuItem::where('id', '=', 16)->first();
        return view('pages.celebrity', compact('celebrities', 'parent_menu'));
    }
}
