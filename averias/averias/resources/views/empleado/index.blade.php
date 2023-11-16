<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>averias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<figure class="text-center">
  <blockquote class="blockquote">
    <p>LISTA DE USUARIOS QUE ENVIARON REPORTE DE AVERIAS</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Reportes del <cite title="Source Title">Sistemas de Averias</cite>
  </figcaption>
</figure>
</head>

<body>
<div class="container col-md-10 ">
<table class="col-sm-10 table table-striped" >
    
    <thead class="thead-DARK">
    
        <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>CODIGO UNIVERSITARIO </th>
            <th>TIPO DE AVERIAS</th>
            <th>DESCRIPCION DE AVERIA</th>
            <th>FOTO</th>
            <th>ACCIONES 1</th>
            <th>ACCIONES 2</th>
        </tr>
    </thead>
    <tbody>
    @foreach( $empleados as $empleado)
    <tr>
        <td>{{ $empleado->id }}</td>
        <td>{{ $empleado->Nombre }}</td>
        <td>{{ $empleado->Apellidos }}</td>
        <td>{{ $empleado->Codigouni }}</td>
        <td>{{ $empleado->Tipoaveria }}</td>
        <td>{{ $empleado->Descripcionaveria}}</td>
        
        <td>
        
          <img src="{{asset('storage').'/'.$empleado->foto}}" width="100" alt=""> 
          
        </td>
        <td>
          <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" >
          @csrf
          <input type="submit" class="btn btn-outline-success"" onclick="return confirm('¿Deseas editar este registro?')" value="editar">
          </a>
        </td>
        <td>

        <form action="{{ url('/empleado/'.$empleado->id )}}" method="post">
          @csrf
          {{ method_field('delete')}}
          <input type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Deseas realmente borrar?')" value="borrar">
        </form>
        </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
{{$empleados->links()}}
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-outline-success" href="/">INICIO</a>
  <a class="btn btn-outline-primary" href="/empleado/create">CREAR NUEVO REPORTE</a>
</div>

</body>

</html>
