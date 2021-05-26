<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;


    public function dateFormated(){
      return Carbon::createFromFormat('Y-m-d', $this->date)->format('d M Y');
    }
    public function timeFormated(){
      return Carbon::createFromFormat('H:i:s', $this->time)->format('H:i');
    }
}
