<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
  protected $grados = [
    // CANTIDAD SiNTOMAS                           1    2    3    4    5    6    7    8    9   10   11
    /*10*/ 'amigdalitis'                      => [0.7, 0.8, 0.5, 0.4, 0.7, 0.5, 0.3, 0.2, 0.6, 0.3],
    /* 9*/ 'asma'                             => [0.7, 0.4, 0.5, 0.6, 0.6, 0.3, 0.3, 0.3, 0.2],
    /*11*/ 'bronquiectasias'                  => [0.7, 0.5, 0.4, 0.6, 0.7, 0.3, 0.2, 0.5, 0.7, 0.8, 0.6],
    /* 5*/ 'bronquiolitis'                    => [0.5, 0.4, 0.7, 0.6, 0.5],
    /* 7*/ 'bronquitis'                       => [0.3, 0.4, 0.5, 0.6, 0.2, 0.3, 0.6],
    /* 8*/ 'cancer-de-laringe'                => [0.5, 0.7, 0.6, 0.4, 0.8, 0.1, 0.6, 0.8],
    /* 8*/ 'cancer-de-pulmon'                 => [0.7, 0.8, 0.2, 0.3, 0.6, 0.1, 0.5, 0.3],
    /* 8*/ 'derrame-pleural'                  => [0.3, 0.1, 0.6, 0.5, 0.4, 0.5, 0.3, 0.2],
    /*10*/ 'difteria'                         => [0.1, 0.2, 0.5, 0.2, 0.4, 0.3, 0.8, 0.1, 0.3, 0.1],
    /* 8*/ 'enfermedad-pulmonar-obstructiva-cronica-epoc'  => [0.9, 0.2, 0.9, 0.6, 0.3, 0.3, 0.4, 0.3],
    /* 7*/ 'enfisema-pulmonar'                => [0.3, 0.2, 0.8, 0.2, 0.7, 0.3, 0.5],
    /* 8*/ 'enfisema-subcutaneo'              => [0.8, 0.6, 0.2, 0.8, 0.2, 0.7, 0.7, 0.6],
    /* 8*/ 'estenosis-de-la-valvula-pulmonar' => [0.9, 0.3, 0.5, 0.5, 0.2, 0.8, 0.5, 0.9],
    /* 8*/ 'faringitis'                       => [0.2, 0.7, 0.8, 0.6, 0.3, 0.9, 0.2, 0.9],
    /* 7*/ 'faringoamigdalitis'               => [0.5, 0.9, 0.2, 0.8, 0.4, 0.7, 0.3],
    /* 5*/ 'fibrosis-quistica'                => [0.5, 0.6, 0.7, 0.2, 0.4],
    /*11*/ 'gripe'                            => [0.5, 0.5, 0.6, 0.3, 0.9, 0.6, 0.3, 0.1, 0.6, 0.2, 0.4],
    /* 7*/ 'laringitis'                       => [0.9, 0.7, 0.4, 0.1, 0.6, 0.2, 0.5],
    /* 8*/ 'legionelosis'                     => [0.9, 0.2, 0.1, 0.8, 0.1, 0.4, 0.7, 0.6],
    /* 6*/ 'mediastinitis'                    => [0.3, 0.6, 0.4, 0.5, 0.5, 0.2],
    /* 7*/ 'mesotelioma'                      => [0.4, 0.4, 0.5, 0.2, 0.8, 0.6, 0.5],
    /* 6*/ 'neumoconiosis'                    => [0.8, 0.4, 0.4, 0.1, 0.3, 0.9],
    /* 5*/ 'neumomediastino'                  => [0.3, 0.2, 0.8, 0.4, 0.1],
    /*11*/ 'neumonia'                         => [0.2, 0.6, 0.3, 0.8, 0.4, 0.2, 0.3, 0.7, 0.5, 0.3, 0.8],
    /* 6*/ 'neumotorax'                       => [0.4, 0.5, 0.9, 0.7, 0.1, 0.6],
    /* 6*/ 'peste-pulmonar'                   => [0.3, 0.2, 0.8, 0.8, 0.5, 0.1],
    /* 7*/ 'pleuritis'                        => [0.8, 0.4, 0.4, 0.1, 0.5, 0.3, 0.8],
    /* 7*/ 'resfriado-comun'                  => [0.5, 0.6, 0.2, 0.7, 0.5, 0.7, 0.3],
    /* 7*/ 'rinosinusitis'                    => [0.3, 0.7, 0.3, 0.7, 0.5, 0.2, 0.8],
    /* 6*/ 'siderosis'                        => [0.3, 0.9, 0.5, 0.3, 0.2, 0.7],
    /* 8*/ 'silicosis'                        => [0.9, 0.4, 0.3, 0.3, 0.4, 0.8, 0.6, 0.4],
    /* 6*/ 'sindrome-de-apnea-e-hipopnea-obstructivas-del-sueno-sahos'    => [0.2, 0.1, 0.4, 0.4, 0.6, 0.9],
    /* 8*/ 'sinusitis'                        => [0.2, 0.7, 0.5, 0.3, 0.2, 0.7, 0.4, 0.3],
    /* 7*/ 'tabaquismo'                       => [0.4, 0.5, 0.8, 0.9, 0.7, 0.5, 0.4],
    /* 6*/ 'tosferina'                        => [0.1, 0.3, 0.5, 0.6, 0.5, 0.9],
    /* 8*/ 'traqueitis'                       => [0.4, 0.7, 0.6, 0.8, 0.7, 0.3, 0.4, 0.5],
    /* 6*/ 'tromboembolismo-pulmonar'         => [0.8, 0.3, 0.6, 0.2, 0.6, 0.2],
    /* 7*/ 'tuberculosis'                     => [0.3, 0.6, 0.9, 0.7, 0.8, 0.2, 0.5]];

  protected $filleable=['enfermedad','descripcion','enlace'];

  public function symptoms(){    //
    return $this->belongsToMany(Symptom::class,'pivots','id_disease','id_symptom');
  }    //

  public function MisGrados(){
    $index=str_slug($this->enfermedad);
    return $this->grados[$index];
  }
}