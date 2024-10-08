<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; // Specify the table name
    protected $primaryKey = 'post_id'; // Set the primary key

    protected $fillable = [
        'title',
        'content',
        'author',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'post_id'); // Use the correct foreign key
    }
}

