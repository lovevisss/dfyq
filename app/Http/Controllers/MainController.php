<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\MenuItem;
use App\Celebrity;

class MainController extends Controller
{
    public function index()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        $title = 'tesf';
        return view('index', compact('parent_menu','title'));
    }

    public function get_celebrity()
    {
        $celebrities = Celebrity::all();
        $parent_menu = MenuItem::where('id', '=', 16)->first();
        $title = "历届秘书长";
        $menu = MenuItem::where('title', $title)->first();  //当前栏目
        $menus = MenuItem::where('parent_id', $menu->parent_id)->get(); //父目录下的子栏目
        return view('pages.celebrity', compact('celebrities', 'parent_menu', 'title','menus'));
    }
}
