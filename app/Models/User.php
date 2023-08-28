<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function post(){
        return $this->hasMany(Post::class);
    }
}
