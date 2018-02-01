<!DOCTYPE html>
<html lang="el">
  <head>
    <meta charset="utf-8">
    <title>Software de gestion - Bodega Cecchin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/admin_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hide_show_pass.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 1){
          echo '<script lenguage="javascript">alert("No existe cuenta de usuario asociada a este Email.");</script>';
        } elseif($_GET['alt'] == 2){
          echo '<script lenguage="javascript">alert("La contraseña ingresada es incorrecta, pruebe otra vez.");</script>';
        } elseif($_GET['alt'] == 3){
          echo '<script lenguage="javascript">alert("Su cuenta de usuario no tiene permisos para ingresar aquí.");</script>';
        } elseif($_GET['alt'] == 4){
          echo '<script lenguage="javascript">alert("Antes de entrar debe iniciar sesion!");</script>';
        }
      }
    ?>

    <form name="ingresar" method="post" action="include/session_check_back.php">
      <div id="contenedor">
        <!-- Logo -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="encabezado">
                <div class="logo">
                  <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 150px; height: 150px">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
                <input type="email" class="form-control" placeholder="Escriba su e-mail" aria-describedby="basic-addon1" name="emailAdmin">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><b>Contraseña:</b></span>
                <input type="password" id="pass" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Escriba su contraseña" name="passAdmin">
                <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12 reg">
               <button type="submit" name="ingresarBE" class="btn btn-primary" style="color: black; font-size: 14px"><span class="glyphicon glyphicon-log-in"> <strong>Ingresar</strong></span></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
