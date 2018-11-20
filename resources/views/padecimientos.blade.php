@extends('layouts.app')

@section('content')
<div class="row">
    <div id="contresult">
        <h2 class="tdiagnost">
            DIAGNÓSTICO GENERADO
        </h2>
        <p>
            Las siguientes enfermedades respiratorias se presentan con un porcentaje aproximado de posibilidad de que usted padezca de dicha enfermedad, adicionalmente le ofrecemos una descripción y posible tratamiento para estos padecimientos, por favor léalo con atención y acuda oportunamente a revisión médica en su centro de salud más cercano.
        </p>
        <div class="row">
            @foreach($enfermedades as $key=>$value)
                @if ( (($loop->iteration-1)%3)==0)
            <hr class="text-info">
                @endif
                <br>
                    <div class="col-md-4 col-md-offset-0 ">
                        <div class="card sombra1" style="width: 20rem;">
                            <img alt="Card image cap" class="card-img-top" src="https://www.webconsultas.com/sites/default/files/styles/encabezado_articulo/public/temas/cancer-pulmon.jpg">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        {{$value*10}}% de {{$key}}
                                    </h5>
                                    <hr class="text-info">
                                        <h5 class="text-center text-info">
                                            <strong>
                                                Recomendaciones
                                            </strong>
                                        </h5>
                                        <br>
                                            <p class="card-text">
                                                Para ello pueden ser útiles los antibióticos y los fármacos broncodilatadores, que contribuyen a relajar y abrir las vías aéreas en los pulmones.
                                            </p>
                                            <hr class="text-info">
                                                <a class="btn btn-primary" href="https://cuidateplus.marca.com/enfermedades/respiratorias/bronquitis.html" target="_blank">
                                                    Mas
                                                </a>
                                            </hr>
                                        </br>
                                    </hr>
                                </div>
                            </img>
                        </div>
                    </div>
                    @endforeach
                </br>
            </hr>
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
