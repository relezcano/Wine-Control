<!DOCTYPE html>
<html lang="el">
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión de cliente - Bodega Cecchin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/hide_show_pass.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 1){
          echo '<script lenguage="javascript">alert("No existe cuenta de usuario asociada a este Email.");</script>';
        } elseif($_GET['alt'] == 2){
          echo '<script lenguage="javascript">alert("La contraseña ingresada es incorrecta, pruebe otra vez.");</script>';
        } elseif($_GET['alt'] == 3){
          echo '<script lenguage="javascript">alert(Para poder ingresar debe iniciar sesión.");</script>';
        } elseif($_GET['alt'] == 4){
          echo '<script lenguage="javascript">alert("Antes de entrar debe iniciar sesion!");</script>';
        }
      }
    ?>



        <!-- Logo -->
        <div class="container-fluid" style="margin-top: 25px; margin-bottom: 10px">
        <div class="row">
          <div class="col-xs-1">
            <img class="center-block" src="../imagenes/logo_vino.png" alt="Cecchin" style="width: 120px; height: 120px">
          </div>
          <div class="col-xs-11"></div>
        </div>
        </div>
        <div class="container" style="margin-top: 20px; padding-top: 60px; margin-left: auto; margin-right:auto; color: white">
          <form name="ingresar" method="post" action="../include/session_check_client.php">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
                <input type="email" class="form-control" placeholder="Escriba su e-mail" aria-describedby="basic-addon1" name="email">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon"><b>Contraseña:</b></span>
                <input type="password" id="pass" class="form-control" aria-label="" placeholder="Escriba su contraseña" name="pass">
                <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12 reg">
              <button type="submit" name="ingresar" class="btn" style="color: black; font-size: 14px; background-color: #00ffcc; border-color: black; border-weight: medium; border-style: solid"><span class="glyphicon glyphicon-log-in"></span> <strong>Ingresar</strong></button>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </div>
    </form>

  </body>
</html>
