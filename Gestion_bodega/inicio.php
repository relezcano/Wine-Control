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


      <div class="container-fluid" style="background-color: black; padding-top: 25px; padding-bottom: 10px; opacity: 0.8; color: white; border-radius: 60px; position: relative">
        <div class="row">
          <div class="col-md-3">
            <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 120px; height: 120px; margin-top: 20px; margin-left: 105px">
          </div>
          <div class="col-md-6">
            <h1 style="font-size: 40px; font-family: sans-serif; text-align: center"><strong>Wine Control</strong></h1>
            <h3 style="font-size: 16px; font-family: sans-serif; text-align: center; margin-right: 15px"><strong><em>Interno</em></strong></h3>
            <h2 style="font-size: 26px; font-family: monospace; text-align: center"><strong>Menu Principal</strong></h2>
            <br>
          </div>
          <div class="col-lg-3">
            <?php
            session_start();
              if ($_SESSION['admin'] = 1){
                $user = $_SESSION['name'];
                ?>
              <h4><span style="color: white; font-size: 16px; font-weight: bold; padding-right: 10px; text-align: center" class="glyphicon glyphicon-user"></span> Bienvenido, <?php echo $user;?>!</h4>
              <h5><a href="include/logout.php"><span style="color: white; font-size: 12px; font-weight: bold" class="glyphicon glyphicon-off"> SALIR</span></a></h5>
              <?}?>
          </div>
        </div>
      </div>

    <br>

    <div class="container" style="padding-top: 10px; padding-bottom: 10px; opacity: 1; color: white; border-radius: 30px">
        <div class="row" style="display: block">
          <div class="col-md-1"></div>
          <div class="col-md-2"><button type="button" onclick="location.href = 'agregar_cliente.php';" style="font-size: 16px; color: black; border: 3px; border-color: black; border-style: solid; border-radius: 20%" class="btn btn-success btn-md"><span class="glyphicon glyphicon-user"> <strong>Agregar Cliente</strong></button></div>
            <div class="col-md-2"><button type="button" onclick="location.href = 'listaclientes.php';" style="font-size: 16px; color: black; border: 3px; border-color: black; border-style: solid; border-radius: 20%" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-search"> <strong>Buscar Cliente</strong></button></div>
              <div class="col-md-3"><button type="button" onclick="location.href = 'despacho.php';" style="font-size: 16px; padding-right: 20px; color: black; border: 3px; border-color: black; border-style: solid; border-radius: 20%" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-send"> <strong>Despacho de Mercadería</strong></button></div>
              <div class="col-md-3"><button type="button" onclick="location.href = 'listadespacho.php';" style="font-size: 16px; padding-left: 15px; color: black; border: 3px; border-color: black; border-style: solid; border-radius: 20%" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-list-alt"> <strong>Lista de despachos</strong></button></div>
                <div class="col-md-1"></div>
        </div>
    </div>
  </body>
</html>
