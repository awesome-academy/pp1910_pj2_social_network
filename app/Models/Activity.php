<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'user_id',
        'post_id',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Scope if activity is like.
     *
     * @return Boolean
     */
    public function scopeIsLike()
    {
        return $this->type == config('activity.type.like');
    }

    /**
     * Scope if activity is upload.
     *
     * @return Boolean
     */
    public function scopeIsUpload()
    {
        return $this->type == config('activity.type.upload');
    }

    /**
     * Scope if activity is comment.
     *
     * @return Boolean
     */
    public function scopeIsComment()
    {
        return $this->type == config('activity.type.comment');
    }
}
