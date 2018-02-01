<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar Nuevo Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/agregar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 4){
          echo '<script lenguage="javascript">alert("Cliente cargado exitosamente!!!.");</script>';
        } elseif($_GET['alt'] == 5){
          echo '<script lenguage="javascript">alert("Ese cliente ya existe...");</script>';
        } elseif($_GET['alt'] == 6){
          echo '<script lenguage="javascript">alert("Error... Vuelva a intentarlo.");</script>';
        }
      }
    ?>


    <div class="container">
      <div id="encabezado">
        <div class="row">
          <div class="col-md-2">
            <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 150px; height: 150px; float: right">
          </div>
          <div class="col-md-10">
            <h1 style="font-size: 60px; font-family: sans-serif"><strong>Wine Control</strong></h1>
            <h2 style="font-size: 40px; font-family: monospace"><strong>Agregar Cliente</strong></h2>
          </div>
        </div>
      </div>
    </div>
    <br>
    <form name="Registro" action="include/registro_cliente.php" method="post">

    <div class="container">
      <div id="contenedor">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Registrar Nuevo Cliente</strong></em></h3>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Nombre:</b></span>
              <input type="text" class="form-control" name="name" placeholder="Coloque aquí el nombre" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Apellido:</b></span>
              <input type="text" class="form-control" name="lastName" placeholder="Coloque aquí el apellido" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Teléfono:</b></span>
              <input type="text" class="form-control" name="phone" placeholder="Coloque aquí el teléfono" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
              <input type="email" class="form-control" name="email" placeholder="ejemploemail@gmail.com" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Documento/CUIT :</b></span>
              <input type="text" class="form-control" name="dni" placeholder="Coloque aquí el DNI / CUIT" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Dirección:</b></span>
              <input type="text" class="form-control" name="address" placeholder="Coloque aquí la dirección" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <div class="form-group">
                <label for="sel1">Seleccione tipo de cliente:</label>
                <select class="form-control" id="sel1" name="type">
                  <option name="1">Consumidor Final</option>
                  <option name="2">Distribuidor</option>
                  <option name="3">Comercio (Vinoteca, restaurant, otros.)</option>
                </select>
              </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Razón Social:</b></span>
              <input type="text" class="form-control" name="reason" placeholder="Coloque aquí la razón social en caso de existir" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4 style="color: white; font-style: italic"><b>Observaciones:</b></h4>
            <textarea name="obs" cols="177" rows="5" style="color: black" placeholder="Escriba aquí detalles u observaciones del cliente. EJ.: Que consume?, Que tan a menudo suele comprar?" required></textarea>
          </div>
        </div>

        <br>
        <br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-2 reg">
            <button type="submit" class="btn btn-success btn-md" style="color: black" name="registrar"><span class="glyphicon glyphicon-ok"> <strong>Guardar</strong></span></button>
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
