<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorshipDescription extends Model
{
    use HasFactory;

    /**
     * Return an instance of the category of the posts
     *
     * @param
     * @return \App\Models\Icon
     */
    public function icon()
    {
      return $this->belongsTo('App\Models\Icon', 'icon_id', 'id');
    }
}
