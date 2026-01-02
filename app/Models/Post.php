<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'body',
        'likes_count',
        'reposts_count',
        'views_count',
    ];

    // ユーザーとの関係（投稿は一人のユーザーに属する）
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
