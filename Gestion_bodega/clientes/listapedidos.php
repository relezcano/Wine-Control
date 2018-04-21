<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Pedidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/listapedidos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 9){
          echo '<script lenguage="javascript">alert("Registro del envío modificado correctamente!!");</script>';
        }
      }
    ?>

    <br>


    <div class="container-fluid" style="background-color: black; padding-top: 25px; padding-bottom: 30px; opacity: 0.9; color: white; border-radius: 60px">
      <form name="ListaPedidos" action="listapedidos.php" method="post">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 26px"><em><strong>Refresque la lista presionando el botón <span class="glyphicon glyphicon-refresh"></span>Actualizar<br>para mostrar todos los envíos cargados.</strong></em></h3>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-1 reg">
            <button type="submit" class="btn btn-primary btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="refresh"><span class="glyphicon glyphicon-refresh"></span> <strong>Actualizar</strong></button>
          </div>
          <div class="col-md-1 reg">
            <button type="button" class="btn btn-danger" style="color: black; border-color: white; border-weight: medium; border-style: solid" onclick="location.href = 'inicio.php';"><span class="glyphicon glyphicon-chevron-left"></span> <strong>Volver</strong></button>
          </div>
          <div class="col-md-5"></div>
        </div>
      </form>

        <br>
        <form name="Modificar" action="listapedidos.php" method="post">
        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Numero de ID:</b></span>
              <input type="text" class="form-control" name="idbusqueda" placeholder="Escriba aquí el ID" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-3"><button type="submit" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="buscar_pedido" class="btn btn-success btn-md"><span class="glyphicon glyphicon-search"></span></button></div>
          <div class="col-md-6"></div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12">

            <?
              session_start();

              require '../include/conexion.php';

              if(isset($_POST['refresh'])) {
                $idActual = $_SESSION['id'];
                $query1 = "SELECT * FROM pedidos WHERE idClient = '$idActual' ORDER BY id DESC";
                $result1 = mysqli_query($link, $query1);
                ?>
              <div class="table-responsive" style="color: white">
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
                  </tr>
                </tbody>
                <?}?>
              </table>
            </div>
            <?}?>
            <br><br><br><br><br>
          </div>
        </div>

        <?

            if(isset($_POST['buscar_pedido'])) {
              $busqueda = 1;
              if($busqueda = 1){

              if(isset($_POST['idbusqueda'])){
                $id = ($_POST['idbusqueda']);
                $query3 = "SELECT * FROM pedidos WHERE id LIKE '%" .$id. "%'";
                $result3 = mysqli_query($link, $query3);

                while ($row = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {

                  $idPedido = $row['id'];
                  $name = $row['name'];
                  $lastName = $row['lastName'];
                  $phone = $row['phone'];
                  $date = $row['date1'];
                  $reason = $row['reason'];
                  $obs = $row['obs'];
                  $idClient = $row['idClient'];

            ?>
          </form>

              <form name="mod_pedido" action="../include/modificar_pedido.php" method="post">

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
                        <input type="text" class="form-control" name="date" value="<? echo $date1;?>" aria-describedby="basic-addon1" required>
                      </div>
                    </div>
                  </div>
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
                      <textarea style="width: 100%; height: 100%; color: black" name="obs" cols="50" rows="5" required><?echo $obs;?></textarea>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <!-- hidden ID empleado que lo cargó al sistema / ID Cliente -->
                <div class="row" hidden>
                <div class="col-md-4">
                  <div class="input-group">
                    <input hidden type="text" class="form-control" name="idEmploy" value="<? echo $idEmploy;?>" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group">
                    <input hidden type="text" class="form-control" name="idClient" value="<? echo $idClient;?>" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group">
                    <input hidden type="text" class="form-control" name="idClient" value="<? echo $idPedido;?>" aria-describedby="basic-addon1">
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
          <?
          }
        }
      }
    }?>
</body>
</html>
