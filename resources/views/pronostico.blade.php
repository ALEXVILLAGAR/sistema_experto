@extends('user.usuario')
@extends('header')

@section('opcion')
<li class="nav-item"> <i ></i><a href="{{ url('nosotros') }}" class="text-white">pronóstico</a>
@endsection

@section('content')
<div class="container">
    <div>
        <h1 class="text-info text-center"> <strong>Tu pronóstico a tiempo</strong> <hr class="bg bg-danger"></h1>
        
    </div>
<div class="stepwizard ">
    <div class="stepwizard-row setup-panel ">
        <div class="stepwizard-step ">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Datos del paciente</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>alergias</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>observaciones del medico</p>
        </div>
         <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>test</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Resultados</p>
        </div>
         <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Calificacion</p>
        </div>
    </div>
</div>
<br>
<form role="form">
    <div class="row setup-content col-offset-2" id="step-1">
        <div class="col-xs-12 col-offset-2">
            <div class="col-md-12">
            <div class="form-group">
            <h3 class="text-center"> Datos del paciente</h3>
            <div class="col-md-8">
                <label class="control-label">Pregunta 1:</label>    
                
                
            </div>
            <div class="col-md-4">
                <div class="btn-group" data-toggle="buttons">
        	
			<label class="btn btn-success active">
				2<input type="radio" name="options" id="option2" autocomplete="off" chacked>
				<span class="glyphicon glyphicon-ok"></span>
			</label>

			<label class="btn btn-primary">
				4<input type="radio" name="options" id="option1" autocomplete="off">
				<span class="glyphicon glyphicon-ok"></span>
			</label>

			<label class="btn btn-info">
				6<input type="radio" name="options" id="option2" autocomplete="off">
				<span class="glyphicon glyphicon-ok"></span>
			</label>

			<label class="btn btn-default">
				8<input type="radio" name="options" id="option2" autocomplete="off">
				<span class="glyphicon glyphicon-ok"></span>
			</label>

			<label class="btn btn-warning">
				10<input type="radio" name="options" id="option2" autocomplete="off">
				<span class="glyphicon glyphicon-ok"></span>
			</label>

			<label class="btn btn-danger">
				NA<input type="radio" name="options" id="option2" autocomplete="off">
				<span class="glyphicon glyphicon-ok"></span>
			</label>
		
		</div>
            </div>     
                </div>
                <div class="form-group ">
                    <label class="control-label">Nombre completo</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Nombre" />
                </div>

                <div class="form-group">
                    <label class="control-label">Edad</label>
                    <input maxlength="100" type="number" required="required" class="form-control" placeholder="Edad" min="0" />
                </div>
                <div class="form-group">
                    <label class="control-label">Documento</label>
                    <input maxlength="100" type="number" required="required" class="form-control" placeholder="Documento de Identificación" />
                </div>
                <div class="form-group">
                    <label class="control-label">Direccion</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Domicilio" />
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-md-12">
            <div class="col-md-12">
                <h3> Alergias</h3>

                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label">¿Alguna alergia conocida?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="alergias" />
                </div>

                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label col-md-8">¿familiares con enfermedades hereditarias?</label>
                    <input maxlength="800" type="text" required="required" class="form-control" placeholder="probabilidad de enfermedad hereditaria" />
                </div>

                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label">observaciones</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="alguna obsrvación"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> observaciones del medico</h3>
                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label">observaciones en la cita</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="alergias" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>

    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Test</h3>
                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label">¿Alguna alergia conocida?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="alergias" />
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Resultados</h3>
                <div class="form-group col-md-8 col-offset-2">
                    <label class="control-label">¿Alguna alergia conocida?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="alergias" />
                </div>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>
@endsection