<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    protected $fillable = [
        'user_id',
        'reactable_id',
        'reactable_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
