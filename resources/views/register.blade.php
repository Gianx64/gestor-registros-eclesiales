<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Registrar usuario</title>
  </head>
  <body>
	  @include('header')
    <div class="container my-5">
      <form method="POST">
        <div class="form-group">
          <label>Nombre de usuario</label>
          <input type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="name" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Correo Electrónico</label>
          <input type="text" class="form-control" placeholder="Ingrese correo electrónico" name="email" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="text" class="form-control" placeholder="Ingrese contraseña" name="password" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>