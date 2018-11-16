<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{

  protected $filleable=['enfermedad'];

  public function symptoms(){    //
    return $this->belongsToMany(Symptom::class,'pivots','id_disease','id_symptom');
  }    //
}


