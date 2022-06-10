<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = ['id', 'title', 'description', 'content', 'photo', 'category_id', 'user_id', 'article_slug',];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

}
