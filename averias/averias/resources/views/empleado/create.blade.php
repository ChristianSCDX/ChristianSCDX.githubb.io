
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Averias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<figure class="text-center">
  <blockquote class="blockquote">
    <p>FORMULARIO DE REGISTRO DE AVERIAS</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Reportes del <cite title="Source Title">Sistema de Averias</cite>
  </figcaption>
</figure>
</head>
<body>
<div class="container col-md-4 ">
    <form  action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    <img class="text-center " width="250" height="100"   srcset="https://www.peruconciencia.pe/wp-content/uploads/29.-Universidad-Nacional-de-Moquegua-UNAM.png" >
    <br></br>
    Llenar todos los campos del Formulario
    <br></br>
    <label for="Nombre" class="form-label"> Nombres </label>
    <input type="text" name="Nombre" id="Nombre"  class="form-control" placeholder =" ingrese su Nombre ">
    <br>
    <label for="Apellidos" class="form-label"> Apellidos </label>
    <input type="text" name="Apellidos"  id="Apellidos"  class="form-control" placeholder =" ingrese su Apellido ">
    <br>    
    <label for="CodigoUniversitario" class="form-label"> Codigo Universitario </label>
    <input type="text" name="Codigouni" id="Codigouni" class="form-control" placeholder =" ingrese su Codigo Universitario ">
    <br>
    <label for="Tipodeaveria" class="form-label"> Tipo de averia </label>
    <input type="text" name="Tipoaveria" id="Tipoaveria"  class="form-control" placeholder =" ingrese su Tipo de Averia ">
    <br>
    <label for="Descripciondeaverias" class="form-label"> Descripcion de averias </label>
    <input type="text" name="Descripcionaveria" id="Descripcionaveria"  class="form-control" placeholder =" describa su averia  ">
    <br>
    <label for="foto" class="form-label"> Foto </label>
    <input type="file" name="foto" id="foto"  class="form-control" placeholder =" ingrese foto de su averia  ">
    <br>
    <input type="submit" value="GUARDAR DATOS" class="btn btn-primary" onclick="return confirm('¿desea guardar la informacion?')"  >
    <br>
    </form>

</div>  
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-outline-success" href="/">INICIO</a>
  <a class="btn btn-outline-primary" href="/empleado/create">CREAR NUEVO REPORTE</a>
</div>
</body>
<footer>
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">CHRIS_SOSA.COM</a>
  </div>
</footer>