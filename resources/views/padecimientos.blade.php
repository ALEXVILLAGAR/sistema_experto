@extends('layouts.app')

@section('content')
  <div class="row">
    <div id="contresult">
      <h2 class="tdiagnost">DIAGNÓSTICO GENERADO</h2>
      <p class="parrafodiag">
        Las siguientes enfermedades respiratorias se presentan con un porcentaje aproximado de posibilidad de que usted padezca de dicha enfermedad, adicionalmente le ofrecemos una descripción detallada de cada padecimiento, por favor léalo con atención y acuda oportunamente a revisión médica en su centro de salud más cercano.
      </p>
      <div class="row">
        @foreach($enfermedades as $key=>$value)
          @if ( (($loop->iteration-1)%3)==0)<hr class="text-info">@endif
          <div class="col-lg-4" style="padding: 15px;">

            <div class="card sombra1">
              <img alt="Card image cap" class="card-img-top" src="{{asset('images/Enfermedades/'.$value['modelo']->id)}}.jpg">
              <div class="card-body">
                <h5 class="card-title text-center">{{$value['grados']*10}}% de {{$key}}</h5>
                <hr class="text-info">
                  <p class="descripcion">{{$value['modelo']->descripcion}}</p>
                  <hr class="text-info">
                    <a class="btn btn-primary" href="{{$value['modelo']->enlace}}" target="_blank">Más</a>
                  </hr>
                </hr>
              </div>
            </div>
            
          </div>
        @endforeach
        <br>
      </div>
    </div>
  </div>
@endsection

<script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>