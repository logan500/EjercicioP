<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <h1>Editar</h1>
    {!! Form::model($empleado,['route'=>['empleado.update',$empleado->id],'method'=>'PUT']) !!}

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
            {!! Form::checkbox('nombre', 'valor') !!}
        </div>

        <div class="form-group">
            {!! Form::label('Turno') !!}
            {!! Form::text('turno', ( isset($turno->nombreTurno) ? $turno->nombreTurno : null ), array('class'=>'form-control' )) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Codigo') !!}
            {!! Form::text('codigo', ( isset($departamento->codigo) ? $departamento->codigo : null ), array('class'=>'form-control' )) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Descripcion') !!}
            {!! Form::text('descripcion', ( isset($departamento->descripcion) ? $departamento->descripcion : null ), array('class'=>'form-control' )) !!}
        </div>

        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}   

    {!! Form::close() !!}
    {!! Form::open(['route'=>['empleado.destroy',$empleado->id],'method'=>'DELETE']) !!}
        {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
</body>
</html>