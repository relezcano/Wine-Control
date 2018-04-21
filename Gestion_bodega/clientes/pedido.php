<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hacer un pedido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
    // include '../include/conexion.php';
    session_start();

      if(isset($_GET['alt'])){
        if($_GET['alt'] == 1){
          echo '<script lenguage="javascript">alert("Pedido enviado exitosamente!!!");</script>';
        } elseif($_GET['alt'] == 2){
          echo '<script lenguage="javascript">alert("Error... Vuelva a intentarlo.");</script>';
        }
      }

      $name = $_SESSION['name'];
      $lastName = $_SESSION['lastName'];
      $phone = $_SESSION['phone'];
      $reason = $_SESSION['reason'];
      $idEmploy = $_SESSION['idEmploy'];
      $idClient = $_SESSION['id'];
    ?>

    <br>
    <form name="Registro" action="../include/hacer_pedido.php" method="post">

    <div class="container">
      <div id="contenedor">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Hacer nuevo pedido</strong></em></h3>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Nombre:</b></span>
              <input type="text" class="form-control" name="name" value="<? echo $name;?>" aria-describedby="basic-addon1" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Apellido:</b></span>
              <input type="text" class="form-control" name="lastName" value="<? echo $lastName;?>" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Teléfono:</b></span>
              <input type="text" class="form-control" name="phone" value="<? echo $phone;?>" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Fecha del pedido:</b></span>
              <input type="date" class="form-control" name="date" aria-describedby="basic-addon1" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Razón Social:</b></span>
              <input type="text" class="form-control" name="reason" value="<? echo $reason;?>" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4 style="color: white; font-style: italic"><b>Descripción del pedido:</b></h4>
            <textarea style="width: 100%; height: 100%; color: black" name="obs" cols="50" rows="5" placeholder="Escriba aquí los detalles del pedido..." required></textarea>
          </div>
          <div class="col-md-6"></div>
      </div>
      <!-- hidden ID empleado que lo cargó al sistema -->
      <div class="row" hidden>
      <div class="col-md-6">
        <div class="input-group">
          <input hidden type="text" class="form-control" name="idClient" value="<? echo $idClient;?>" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group">
          <input hidden type="text" class="form-control" name="idEmploy" value="<? echo $idEmploy;?>" aria-describedby="basic-addon1">
        </div>
      </div>
      </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-2 reg">
            <button type="submit" class="btn btn-success btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="enviar"><span class="glyphicon glyphicon-ok"></span> <strong>Enviar</strong></span></button>
          </div>
          <div class="col-md-2 reg">
            <button type="button" class="btn btn-danger btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" onclick="location.href = 'inicio.php';"><span class="glyphicon glyphicon-remove"></span> <strong>Cancelar</strong></span></button>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
