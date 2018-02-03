<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Despacho de Mercadería</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/despacho.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 7){
          echo '<script lenguage="javascript">alert("Datos del envío cargados exitosamente!!!");</script>';
        }elseif($_GET['alt'] == 8){
          echo '<script lenguage="javascript">alert("X_X (Esto es vergonzoso...) Ha ocurrido un error, por favor intentelo nuevamente");</script>';
        }
       }
    ?>

    <div class="container">
      <div id="encabezado">
        <div class="row">
          <div class="col-md-2">
            <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 150px; height: 150px">
          </div>
          <div class="col-md-10">
            <h1 style="font-size: 60px; font-family: sans-serif"><strong>Wine Control</strong></h1>
            <h2 style="font-size: 40px; font-family: monospace"><strong>Despacho de mercadería</strong></h2>
          </div>
        </div>
      </div>
    </div>

    <br>

    <form name="Despacho" action="include/registro_despacho.php" method="post">

    <div class="container">
      <div id="contenedor">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Datos del Envío</strong></em></h3>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Nombre del transporte:</b></span>
              <input type="text" class="form-control" name="transport" placeholder="Coloque aquí el nombre del transporte" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Fecha de despacho:</b></span>
              <input type="date" class="form-control" name="dateDis" placeholder="Fecha de despacho" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Fecha de llegada:</b></span>
              <input type="date" class="form-control" name="dateAr" placeholder="Fecha de llegada" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Remitente:</b></span>
              <input type="text" class="form-control" name="send" placeholder="Nombre del remitente" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Destinatario:</b></span>
              <input type="text" class="form-control" name="recive" placeholder="Nombre de quién recibe el envio" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Número de Guía:</b></span>
              <input type=text class="form-control" name="guide" placeholder="Número de Guía" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Cantidad de bultos:</b></span>
              <input type="text" class="form-control" name="amountPack" placeholder="Cantidad de bultos" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Origen:</b></span>
              <input type="text" class="form-control" name="origin" placeholder="Origen del envío" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Destino:</b></span>
              <input type="text" class="form-control" name="destination" placeholder="Destino del envío" aria.describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Comisión:</b></span>
              <input type="text" class="form-control" name="commission" placeholder="Comisión del envío" aria.describedby="basic-addon1" required>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-sm-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>ID Destinatario:</b></span>
              <input type="text" class="form-control" name="idRecive" placeholder="ID del destinatario" aria.describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-sm-9">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-12">
            <h4 style="color: white; font-style: italic"><b>Observaciones:</b></h4>
            <textarea name="obs" cols="136" rows="5" placeholder="Escriba aquí todos los detalles del envío.." required></textarea>
          </div>
        </div>

        <br>
        <br>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-2 reg">
            <button type="submit" class="btn btn-success btn-md" style="color: black" name="guardar"><span class="glyphicon glyphicon-ok"> <strong>Guardar</strong></span></button>
          </div>
          <div class="col-md-2 reg">
            <button type="button" class="btn btn-danger btn-md" style="color: black" onclick="location.href = 'inicio.php';"><span class="glyphicon glyphicon-remove"> <strong>Cancelar</strong></span></button>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
