<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   



    <img class="text-center " width="250" height="100"   srcset="https://www.peruconciencia.pe/wp-content/uploads/29.-Universidad-Nacional-de-Moquegua-UNAM.png" >
    <br></br>
    Formulario que tendra los datos en comun con create y edit
    <br></br>
    <label for="Nombre" class="form-label"> Nombres </label>
    <input type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)? $empleado->Nombre:'' }}" class="form-control" placeholder =" ingrese su Nombre ">
    <br>
    <label for="Apellidos" class="form-label"> Apellidos </label>
    <input type="text" name="Apellidos"  id="Apellidos" value="{{ isset($empleado->Apellidos)? $empleado->Apellidos:'' }}" class="form-control" placeholder =" ingrese su Apellido ">
    <br>    
    <label for="CodigoUniversitario" class="form-label"> Codigo Universitario </label>
    <input type="text" name="Codigouni" id="Codigouni" value="{{ isset($empleado->Codigouni)? $empleado->Codigouni:'' }}" class="form-control" placeholder =" ingrese su Codigo Universitario ">
    <br>
    <label for="Tipodeaveria" class="form-label"> Tipo de averia </label>
    <input type="text" name="Tipoaveria" id="Tipoaveria" value="{{ isset($empleado->Tipoaveria)? $empleado->Tipoaveria:'' }}"  class="form-control" placeholder =" ingrese su Tipo de Averia ">
    <br>
    <label for="Descripciondeaverias" class="form-label"> Descripcion de averias </label>
    <input type="text" name="Descripcionaveria" id="Descripcionaveria" value="{{ isset($empleado->Descripcionaveria)? $empleado->Descripcionaveria:'' }}"  class="form-control" placeholder =" describa su averia  ">
    <br>
    <input type="submit" value="GUARDAR DATOS" class="btn btn-primary" onclick="return confirm('¿desea guardar la informacion?')"  >
    <br>
