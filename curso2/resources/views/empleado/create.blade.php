<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    {!! Form::open(['route'=>'empleado.store','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('turno','Turno: ') !!}
            {!! Form::text('turno',null,['class' =>'form-control','placeholder' => 'ingresa el turno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('codigo','codigo: ') !!}
            {!! Form::text('codigo',null,['class' =>'form-control','placeholder' => 'ingresa el codigo']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion','descripcion: ') !!}
            {!! Form::text('descripcion',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('matricula','matricula: ') !!}
            {!! Form::text('matricula',null,['class' =>'form-control','placeholder' => 'ingresa la matricula']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('paterno','paterno: ') !!}
            {!! Form::text('paterno',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('materno','materno: ') !!}
            {!! Form::text('materno',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nombre','nombre: ') !!}
            {!! Form::text('nombre',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fecha_nacimiento','fecha_nacimiento: ') !!}
            {!! Form::text('fecha_nacimiento',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sexo','sexo: ') !!}
            {!! Form::text('sexo',null,['class' =>'form-control','placeholder' => 'ingresa la descripcion']) !!}
        </div>

        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    <h1>Hola mundo desde crear turno</h1>
</body>
</html>