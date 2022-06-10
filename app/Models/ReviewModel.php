<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'mark',
        'text',
        'user_id',
        'article_id',
    ];
}
