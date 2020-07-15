<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'type',
        'is_read',
        'post_id',
        'comment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');  
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
