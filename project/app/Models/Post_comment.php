<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_comment extends Model
{
	protected $with = ['user_details'];

    public function post_details()
    {
        return $this->belongsTo(Post_details::class, 'post_id', 'post_id');
    }

    public function user_details()
    {
        return $this->belongsTo(User_details::class, 'user_id', 'user_id');
    }
}
