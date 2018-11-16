<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pivot extends Model
{
    //
  protected $fillable=['id_symptom', 'id_disease'];
}
