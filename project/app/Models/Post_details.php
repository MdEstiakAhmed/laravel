<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_details extends Model
{
	protected $with = ['user_details'];

	public function user_details()
    {
        return $this->belongsTo(User_details::class, 'user_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Post_comment::class, 'post_id', 'post_id');
    }
}
