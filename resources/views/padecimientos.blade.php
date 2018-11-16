@extends('layouts.app')

@section('content')
    @foreach($enfermedades as $key=>$value)
      <h3>{{$key}}</h3>
      <strong> {{$value}} </strong>

    @endforeach
@endsection()