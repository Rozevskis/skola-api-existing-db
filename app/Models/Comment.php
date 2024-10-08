<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments'; // Specify the table name
    protected $primaryKey = 'comment_id'; // Set the primary key

    protected $fillable = [
        'post_id',
        'comment_content',
        'commenter',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'post_id'); // Use the correct foreign key
    }
}
