<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $fillable = ['name', 'body', 'post_id'];
    public function post()
    {
        // post هنا الكود يدل على انه ينتمي الى كود 
        return $this->belongsTo(Post::class);

    }
}

