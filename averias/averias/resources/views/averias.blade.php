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
    <p>REGISTRAR AVERIAS </p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Quejas del <cite title="Source Title">Sistema de AVERIAS</cite>
  </figcaption>
</figure>
</head>


<body>
<div class="container mt-5">
    <h1 class="text-center">Formulario de Contacto</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="">
                @csrf <!-- Agrega un token CSRF por seguridad -->
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="tucorreo@example.com">
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>