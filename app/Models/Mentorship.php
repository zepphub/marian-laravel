<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentorship extends Model
{
    use HasFactory;

    public $timestamps = false;

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

    /**
     * Return an instance of the service of the menthorship
     *
     * @param
     * @return \App\Models\Service
     */
    public function service()
    {
      return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }
}
