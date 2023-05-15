<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'author'];
    public function comments()
    {
        // هنا عرفنا ان الكومينت يتكون من اكثر من كومنت
        return $this->hasMany(Comment::class);
    }
}
