<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentorship extends Model
{
    use HasFactory;

    /**
     * Return an array of MentorshipDescription
     *
     * @param
     * @return Array \App\Models\MentorshipDescription
     */
    public function descriptions()
    {
      return $this->hasMany('App\Models\MentorshipDescription', 'mentorship_id');
    }
}
