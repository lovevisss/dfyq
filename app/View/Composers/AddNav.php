<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/11/8
 * Time: 16:43
 */
namespace App\View\Composers;

use Illuminate\View\View;

class AddNav
{
    public function compose(View $view)
    {
        $view->with('admin', auth()->user());
    }
}