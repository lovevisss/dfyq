<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2019/4/15
 * Time: 15:44
 */
namespace App\Http\Forms;

class PublishPostForm extends Form
{
    protected $rules = [
    'body' => 'required'
    ];


    public function persist()
    {
        $post = Post::create();
        var_dump('save crap to the db');
    }


}