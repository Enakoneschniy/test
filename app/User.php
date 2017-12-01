<?php

namespace App;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \KodiComponents\Support\Upload;

class User extends Authenticatable
{
    use Notifiable;
    use Upload;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'avatar' => 'image'
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function role(){
        return $this->belongsToMany(Role::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function isAdmin(){
        return null !== $this->roles()->where('name', 'admin')->first();
    }
    public function isModerator(){
        return null !== $this->roles()->where('name', 'moderator')->first();
    }
}
