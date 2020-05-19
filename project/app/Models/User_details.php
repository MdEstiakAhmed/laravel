<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model
{
    public function userPost()
    {
        return $this->hasMany(Post_details::class, 'user_id', 'user_id');
    }

    public function userComment()
    {
        return $this->hasMany(Post_comment::class, 'user_id', 'user_id');
    }
}
