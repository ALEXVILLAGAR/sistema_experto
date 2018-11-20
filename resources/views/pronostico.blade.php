@extends('user.usuario')
@extends('header')

@section('opcion')
@endsection

@section('content')
<div class="container" id="contpronost">
    <div>
        <h2 class="text-center">
            <strong>
                Tu pronóstico a tiempo
            </strong>
        </h2>
        <p>
            Por favor selecciona los síntomas que presentas para que podamos brindarte
            <br>
                un diagnóstico adecuado sobre la enfermedad que puedes pesentar
            </br>
        </p>
        <hr>
        </hr>
    </div>
    <form action="{{route('enfermedades.store')}}" method="post">
        @csrf
        <div class="form-check">
            @foreach($sintomas as $sintoma)
            <label>
                <input name="{{$sintoma->id}}" type="checkbox">
                    <span class="label-text">
                        {{$sintoma->sintoma}}
                    </span>
                </input>
            </label>
            <br>
                @endforeach
            </br>
        </div>
        <span class="imgdiagnost">
        </span>
        <span class="imgdiagnost">
        </span>
        <span class="imgdiagnost">
        </span>
        <span class="imgdiagnost">
        </span>
        <button class="btn btn-primary" type="submit">
            Diagnosticar
        </button>
    </form>
</div>
@endsection
