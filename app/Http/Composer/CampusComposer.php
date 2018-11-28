<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/11/13
 * Time: 13:26
 */

namespace App\Http\Composer;

use Illuminate\Contracts\View\View;
use TCG\Voyager\Models\Post;
class CampusComposer {
    public function compose(View $view)
    {
        $view->with('campus_posts', Post::where('category_id',2)->orderBy('created_at', 'DESC')->take(7)->get());
    }
}



?>