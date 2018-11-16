@extends('user.usuario')
@extends('header')

@section('opcion')
  <li class="nav-item"> <i ></i><a href="{{ url('nosotros') }}" class="text-white">pronóstico</a>
@endsection

@section('content')

  <div class="container" id="contpronost">
    
    <div>
      <h2 class="text-center"><strong>Tu pronóstico a tiempo</strong></h2>
      <p>Por favor selecciona los síntomas que presentas para que podamos brindarte <br>un diagnóstico adecuado sobre la enfermedad que puedes pesentar</p>
      <hr>
    </div>
    
    <form action="{{route('enfermedades.store')}}" method="post">
      @csrf
      
      <div class="form-check">
        @foreach($sintomas as $sintoma)
          <label>
            <input type="checkbox" name="{{$sintoma->id}}"> 
            <span class="label-text">{{$sintoma->sintoma}}</span>
          </label><br>
        @endforeach
      </div>
      
      <span class="imgdiagnost"></span>
      <span class="imgdiagnost"></span>
      <span class="imgdiagnost"></span>
      <span class="imgdiagnost"></span>

      <button type="submit" class="btn btn-primary">Diagnosticar</button>
    
    </form>
  

  </div>

@endsection