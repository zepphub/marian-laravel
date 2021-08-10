<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;
    private const MONTHS = array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic');

    public function dateFormated(){
      //return Carbon::createFromFormat('Y-m-d', $this->date)->locale('es')->isoFormat('D MMM Y');
      $date = Carbon::createFromFormat('Y-m-d', $this->date);

      return $date->day.' '.self::MONTHS[$date->month - 1].' '.$date->year;
    }
    public function timeFormated(){
      return Carbon::createFromFormat('H:i:s', $this->time)->format('H:i');
    }
}
