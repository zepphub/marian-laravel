<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    use HasFactory;

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
}
