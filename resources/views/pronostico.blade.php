@extends('user.usuario')
@extends('header')

@section('opcion')
<li class="nav-item"> <i ></i><a href="{{ url('nosotros') }}" class="text-white">pronóstico</a>
@endsection

@section('content')
<div class="container" id="contpronost">
    <div>
        <h1 class="text-info text-center"> <strong>Tu pronóstico a tiempo</strong> <hr class="bg bg-danger"></h1>
    </div>
    <div>
        <form action="{{route('enfermedades.store')}}" method="post">
            @csrf
            @foreach($sintomas as $sintoma)
                <input type="checkbox" name="{{$sintoma->id}}">
                <label> {{$sintoma->sintoma}} </label>
                <br>
            @endforeach
            <button type="submit" class="btn btn-success">Diagnosticar</button>
        </form>
    </div>
</div>
@endsection