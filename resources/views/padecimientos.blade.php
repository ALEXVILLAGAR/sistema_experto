@extends('layouts.app')

@section('content')
  
  <div id="contresult">
    <h2 class="tdiagnost">DIAGNÓSTICO GENERADO</h2>
    <p>Las siguientes enfermedades respiratorias se presentan con un porcentaje aproximado de posibilidad de que usted padezca de dicha enfermedad, adicionalmente le ofrecemos una descripción y posible tratamiento para estos padecimientos, por favor léalo con atención y acuda oportunamente a revisión médica en su centro de salud más cercano.</p><hr>
    @foreach($enfermedades as $key=>$value)
      <h4><strong>{{$value*10}} % = </strong> {{$key}}</h4>
    @endforeach
  </div>

@endsection()