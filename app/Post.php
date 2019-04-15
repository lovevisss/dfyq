<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2019/4/15
 * Time: 14:06
 */

namespace App;


class Post extends TCG\Voyager\Models\Post
{
    public function scopeSpanningDays($query, $days)
    {
        return $query->oldest()->where('created_at', '>', Carbon::now()->subDays($days)->firstOfYear())->selectRaw('author_id as month, sum(category_id) as category')->groupBy('month');
    }
}