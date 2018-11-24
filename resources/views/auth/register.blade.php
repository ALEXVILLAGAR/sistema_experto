@extends('layouts.app')

@section('content')
<div class="fondo_registrar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card sombra border border-primary">
                    <div class="card-header bg-info ">
                        <h1 class="text-center text-white">
                            Registrarme
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" aria-label="{{ __('Register') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="name">
                                    <strong>
                                        Nombre
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $errors->first('name') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="email">
                                    <strong>
                                        Correo electrónico
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="edad">
                                    <strong>
                                        Fecha Nacimiento
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control" id="email" name="edad" required="" type="date" value="{{ old('edad') }}">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="edad">
                                    <strong>
                                        Sexo
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <select class="custom-select custom-select-lg mb-3" name="genero">
                                        <option selected="">
                                            seleccione una opción
                                        </option>
                                        <option value="Mujer">
                                            Mujer
                                        </option>
                                        <option value="Hombre">
                                            Hombre
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="password">
                                    <strong>
                                        Contraseña
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required="" type="password">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label text-md-right text-primary" for="password-confirm">
                                    <strong>
                                        Confirmar contraseña
                                    </strong>
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-11 offset-md-1">
                                    <h4 class="text-center text-dark">
                                        <strong>
                                            nota:
                                        </strong>
                                        al confirmar tu registro estas aceptando nuestros
                                        <a data-target="#exampleModal" data-toggle="modal" href="#">
                                            terminos y condciones
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button class="btn btn-outline-dark" type="submit">
                                        {{ __('Confirmar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal_condiciones')
</div>
@endsection
