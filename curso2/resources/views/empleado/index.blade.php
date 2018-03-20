<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Bienvenido estos son los empeados</h1>

    <table class="table">
      <thead>
        <th>ID</th>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Fecha de nacimiento</th>
        <th>Sexo</th>
        <th>Turno</th>
        <th>Codigo</th>
        <th>Descripcion</th>
      </thead>
      @foreach($empleados as $empleado)
      <tbody>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->matricula}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->paterno}}</td>
        <td>{{$empleado->materno}}</td>
        <td>{{$empleado->fecha_nacimiento}}</td>  
        <td>{{$empleado->sexo}}</td>
        <td>{{$empleado->nombreTurno}}</td>
        <td>{{$empleado->codigo}}</td>
        <td>{{$empleado->descripcion}}</td>
        <td>{!! link_to_route('empleado.edit', $title = 'Editar', $parameters = $empleado->id, $attributes = ['class'=>'btn btn-primary']) !!}</td>

      </tbody>
      @endforeach
    </table>
</body>
</html>