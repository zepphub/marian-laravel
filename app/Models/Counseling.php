<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Return an array of CounselingsDescription
     *
     * @param
     * @return Array \App\Models\CounselingDescription
     */
    public function descriptions()
    {
      return $this->hasMany('App\Models\CounselingDescription', 'counseling_id');
    }

    /**
     * Return an instance of the service of the counseling
     *
     * @param
     * @return \App\Models\Service
     */
    public function service()
    {
      return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }
}
