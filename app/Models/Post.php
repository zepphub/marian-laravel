<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'image',
        'category_id',
    ];

    /**
     * Return an instance of the category of the posts
     *
     * @param
     * @return \App\Models\Category
     */
    public function category()
    {
      return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
