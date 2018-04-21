<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de ID's de los empleados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/listaclientes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>


    <div class="container-fluid" style="background-color: black; padding-top: 10px; padding-bottom: 30px; opacity: 0.9; color: white; border-radius: 60px">
      <form name="ListaClientes" action="listaclientes.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 26px"><em><strong>Lista de ID's de todos los empleados que usan el programa.</strong></em></h3>
        </div>
      </div>

        <br>

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-2 reg">
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

                  $query = "SELECT * FROM users ORDER BY id ASC";
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
                      <th scope="col">E-mail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?  while($row = mysqli_fetch_array($result)) {?>
                        <td><?echo $row['id'];?></td>
                        <td><?echo $row['name'];?></td>
                        <td><?echo $row['lastName'];?></td>
                        <td><?echo $row['phone'];?></td>
                        <td><?echo $row['email'];?></td>
                    </tr>
                  </tbody>
                  <?}?>
                </table>
              </div>
            </div>
          </div>
        </div>
              <br><br><br><br><br><br><br>
  </body>
</html>
