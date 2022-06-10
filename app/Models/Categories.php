<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['id', 'category','category_slug',];

    public function articles(){

        return $this->hasMany(Articles::class, 'category_id');

    }
}
