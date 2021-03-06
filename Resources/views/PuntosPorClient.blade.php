<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <h1> Puntos Por Cliente </h1>
    <table class="table table-bordered w-50 m-3">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Client_id</th>
            <th scope="col">Puntos</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($PuntosPorCliente as $Puntos)
          <tr>
          
          <th scope="row">{{$Puntos['id']}}</th>
              <td>{{$Puntos['client_id']}}</td>
              <td>{{$Puntos['puntos']}}</td>
          </tr>
          @empty
            @endforelse
        </tbody>
      </table>
</body>
</html>