<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
    public function post(){
        return $this->hasMany(Post::class);
    }
}
