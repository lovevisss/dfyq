<?php

namespace App\Http\Controllers;

use App\Scenery;
use TCG\Voyager\Models\MenuItem;
use App\Celebrity;

class MainController extends Controller
{
    public function index()
    {
        $parent_menu = MenuItem::where('id', '=', 15)->first();
        $sceneries = Scenery::orderBy('created_at', 'DESC')->take(9)->get();
        return view('index', compact('parent_menu', 'sceneries'));
    }

    public function get_celebrity()
    {
        $celebrities = Celebrity::all();
        $parent_menu = MenuItem::where('id', '=', 16)->first();
        $title = "历届秘书长";
        $menu = MenuItem::where('title', $title)->first();  //当前栏目
        $menus = MenuItem::where('parent_id', $menu->parent_id)->get(); //父目录下的子栏目
        return view('pages.celebrity', compact('celebrities', 'parent_menu' ,'menus','title'));
    }

    public function get_category($id)
    {
        return $id;
    }
}
