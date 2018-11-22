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
class NoticeComposer {
    public function compose(View $view)
    {
        $view->with('notice_posts', Post::where('category_id',1)->orderBy('created_at', 'DESC')->take(7)->get());
    }
}



?>