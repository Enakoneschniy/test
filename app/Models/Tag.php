<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
