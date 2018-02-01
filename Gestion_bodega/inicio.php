<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div id="encabezado">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 150px; height: 150px; margin-top: 35px">
          </div>
          <div class="col-md-10">
            <h1 style="font-size: 60px; font-family: sans-serif"><strong>Wine Control</strong></h1>
            <h3 style="font-size: 36px; font-family: sans-serif;"><strong><em>Interno</em></strong></h3>
            <h2 style="font-size: 40px; font-family: monospace"><strong>Menu Principal</strong></h2>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="container">
      <div id="contenedor">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2"><button type="button" onclick="location.href = 'agregar_cliente.php';" style="font-size: 16px; color: black" class="btn btn-success btn-md"><span class="glyphicon glyphicon-user"> <strong>Agregar Cliente</strong></button></div>
            <div class="col-md-2"><button type="button" onclick="location.href = 'listaclientes.php';" style="font-size: 16px; margin-left: 7px; color: black" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-search"> <strong>Buscar Cliente</strong></button></div>
              <div class="col-md-3"><button type="button" onclick="location.href = 'despacho.php';" style="font-size: 16px; padding-right: 20px; color: black; margin-left: 5px" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-send"> <strong>Despacho de Mercadería</strong></button></div>
              <div class="col-md-3"><button type="button" onclick="location.href = 'listadespacho.php';" style="font-size: 16px; padding-left: 15px; color: black" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-list-alt"> <strong>Lista de despachos</strong></button></div>
                <div class="col-md-1"></div>
        </div>
      </div>
    </div>
  </body>
</html>
