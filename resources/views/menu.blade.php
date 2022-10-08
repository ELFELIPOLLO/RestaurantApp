<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de platillos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Consultar platillos</h1><hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Vegetariano</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($platillos as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nombre}}</td>
                                <td>$ {{$p->precio}}</td>
                                <td>{{$p->vegetariano}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>