<?php

namespace App;

use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use App\Models\React;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'birthday',
        'gender',
        'address',
        'avatar',
        'cover',
        'language'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'receiver_id');
    }

    public function reacts()
    {
        return $this->hasMany(React::class);
    }

    /**
     * Scope if user is Male.
     *
     * @return Boolean
     */
    public function scopeIsMale()
    {
        return $this->gender == config('user.gender.male');
    }

    /**
     * Scope if user is Female.
     *
     * @return Boolean
     */
    public function scopeIsFemale()
    {
        return $this->gender == config('user.gender.female');
    }
}
