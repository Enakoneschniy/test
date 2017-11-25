<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
