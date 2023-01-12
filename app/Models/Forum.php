<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
        'title',
        'description',
        'category',
    ];

    protected $table = 'forum';

    protected $primaryKey = 'post_id';
}
