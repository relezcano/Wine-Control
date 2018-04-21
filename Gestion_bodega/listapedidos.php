<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Pedidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/listadespacho.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container-fluid" style="background-color: black; padding-top: 25px; padding-bottom: 30px; opacity: 0.9; color: white; border-radius: 60px">
      <form name="ListaPedidos" action="listapedidos.php" method="post">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 26px"><em><strong>Refresque la lista presionando el botón <span class="glyphicon glyphicon-refresh"></span>Actualizar<br>para mostrar todos los pedidos realizados.</strong></em></h3>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-1 reg">
            <button type="submit" class="btn btn-primary btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="refresh"><span class="glyphicon glyphicon-refresh"></span> <strong>Actualizar</strong></button>
          </div>
          <div class="col-md-1 reg">
            <button type="button" class="btn btn-danger" style="color: black; border-color: white; border-weight: medium; border-style: solid" onclick="location.href = 'inicio.php';"><span class="glyphicon glyphicon-circle-arrow-left"></span> <strong>Volver</strong></button>
          </div>
          <div class="col-md-5"></div>
        </div>
      </form>

        <br>

        <div class="row">
          <div class="col-lg-12">
            <?
              session_start();

              require 'include/conexion.php';

              if(isset($_POST['refresh'])) {
                if ($_SESSION['winery'] == 1) {
                  $query = "SELECT * FROM pedidos ORDER BY id DESC";
                  $result = mysqli_query($link, $query);
                  ?>

              <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Fecha del pedido</th>
                    <th scope="col">Razón social</th>
                    <th scope="col">Pedido</th>
                    <th scope="col">ID Cliente</th>
                    <th scope="col">ID Empleado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?  while($row = mysqli_fetch_array($result)) {?>
                    <td><?echo $row['id'];?></td>
                    <td><?echo $row['name'];?></td>
                    <td><?echo $row['lastName'];?></td>
                    <td><?echo $row['phone'];?></td>
                    <td><?echo $row['date1'];?></td>
                    <td><?echo $row['reason'];?></td>
                    <td><?echo $row['obs'];?></td>
                    <td><?echo $row['idClient'];?></td>
                    <td><?echo $row['idEmploy'];?></td>
                  </tr>
                </tbody>
                <?}?>
              </table>
            <?} else {
              $idActual = $_SESSION['id'];
              $query1 = "SELECT * FROM pedidos WHERE idEmploy = '$idActual' ORDER BY id DESC";
              $result1 = mysqli_query($link, $query1);

            ?>
            <div class="table-responsive">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col">Fecha del pedido</th>
                  <th scope="col">Razón social</th>
                  <th scope="col">Pedido</th>
                  <th scope="col">ID Cliente</th>
                  <th scope="col">ID Empleado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?  while($row = mysqli_fetch_array($result1)) {?>
                  <td><?echo $row['id'];?></td>
                  <td><?echo $row['name'];?></td>
                  <td><?echo $row['lastName'];?></td>
                  <td><?echo $row['phone'];?></td>
                  <td><?echo $row['date1'];?></td>
                  <td><?echo $row['reason'];?></td>
                  <td><?echo $row['obs'];?></td>
                  <td><?echo $row['idClient'];?></td>
                  <td><?echo $row['idEmploy'];?></td>
                </tr>
              </tbody>
              <?}?>
            </table>
          <?}
        }?>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br>
    </div>
