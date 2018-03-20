<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Hola mundo desde index turnos</h1>

    <table class="table">
      <thead>
        <th>Descripcion</th>
      </thead>
      @foreach($turnosx as $turno)
      <tbody>
        <td>{{$turno->id}}</td>
        <td>{{$turno->nombreTurno}}</td>
        <td>{!! link_to_route('turnos.edit', $title = 'Editar', $parameters = $turno->id, $attributes = ['class'=>'btn btn-primary']) !!}</td>
      </tbody>
      @endforeach
    </table>

    {!!$turnosx->render();!!}
</body>
</html>