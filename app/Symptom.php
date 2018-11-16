<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    //
  protected $filleable=['sintoma'];

  public function diseases(){    //
    return $this->belongsToMany(Disease::class,'pivots','id_symptom','id_disease');
  }    //
}
