<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Despachos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/listadespacho.css">
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

    <div class="container">
      <div id="encabezado">
        <div class="row">
          <div class="col-md-2">
            <img src="imagenes/logo_vino.png" alt="Cecchin" style="width: 150px; height: 150px">
          </div>
          <div class="col-md-10">
            <h1 style="font-size: 60px; font-family: sans-serif"><strong>Wine Control</strong></h1>
            <h2 style="font-size: 40px; font-family: monospace"><strong>Lista de despachos</strong></h2>
          </div>
        </div>
      </div>
    </div>

    <br>

    <form name="ListaDespacho" action="listadespacho.php" method="post">

    <div class="container-fluid">
      <div id="contenedor">
        <div class="row">
          <div class="col-md-12">
            <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Refresque la lista presionando el botón de abajo.</strong></em></h3>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-1 reg">
            <button type="submit" class="btn btn-primary btn-md" style="color: black" name="refresh"><span class="glyphicon glyphicon-refresh"> <strong>Refrescar</strong></span></button>
          </div>
          <div class="col-md-1 reg">
            <button type="button" class="btn btn-danger" style="color: black" onclick="location.href = 'inicio.php';"><span class="glyphicon glyphicon-circle-arrow-left"> <strong>Volver</strong></span></button>
          </div>
          <div class="col-md-5"></div>
        </div>
      </form>

        <br>
        <form name="modificar" action="listadespacho.php" method="post">
        <div class="row" style="margin-left: 190px">
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Numero de ID:</b></span>
              <input type="text" class="form-control" name="idbusqueda" placeholder="Escriba aquí el ID" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-3"><button type="submit" style="color: black" name="buscar_despacho" class="btn btn-success btn-md"><span class="glyphicon glyphicon-search"></button></div>
          <div class="col-md-3"></div>
        </div>

        <br>

        <div class="row">
          <div class="col-lg-12">
            <?
              session_start();

              require 'include/conexion.php';

              if(isset($_POST['refresh'])) {
                if ($_SESSION['winery'] == 1) {
                  $query = "SELECT * FROM dispatch ORDER BY id DESC";
                  $result = mysqli_query($link, $query);
                  ?>
                <div class="table-responsive">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Transporte</th>
                      <th scope="col">Fecha salida</th>
                      <th scope="col">Fecha llegada</th>
                      <th scope="col">Remitente</th>
                      <th scope="col">Destinatario</th>
                      <th scope="col">Nº Guía</th>
                      <th scope="col">Bultos</th>
                      <th scope="col">Origen</th>
                      <th scope="col">Destino</th>
                      <th scope="col">Comisión</th>
                      <th scope="col">Detalles</th>
                      <th scope="col">ID Empleado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?  while($row = mysqli_fetch_array($result)) {?>
                      <td><?echo $row['id'];?></td>
                      <td><?echo $row['transport'];?></td>
                      <td><?echo $row['dateDis'];?></td>
                      <td><?echo $row['dateAr'];?></td>
                      <td><?echo $row['send'];?></td>
                      <td><?echo $row['recive'];?></td>
                      <td><?echo $row['guide'];?></td>
                      <td><?echo $row['amountPack'];?></td>
                      <td><?echo $row['origin'];?></td>
                      <td><?echo $row['destination'];?></td>
                      <td><?echo $row['commission'];?></td>
                      <td><?echo $row['obs'];?></td>
                      <td><?echo $row['idEmploy'];?></td>
                    </tr>
                  </tbody>
                  <?}?>
                </table>
                <?}else{
              $idActual = $_SESSION['id'];
              $query1 = "SELECT * FROM dispatch WHERE idEmploy AND idRecive = '$idActual' ORDER BY id DESC";
              $result1 = mysqli_query($link, $query1);
              ?>
              <div class="table-responsive">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Transporte</th>
                    <th scope="col">Fecha salida</th>
                    <th scope="col">Fecha llegada</th>
                    <th scope="col">Remitente</th>
                    <th scope="col">Destinatario</th>
                    <th scope="col">Nº Guía</th>
                    <th scope="col">Bultos</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Comisión</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">ID Empleado</th>
                    <th scope="col">ID Destinatario</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?  while($row = mysqli_fetch_array($result1)) {?>
                    <td><?echo $row['id'];?></td>
                    <td><?echo $row['transport'];?></td>
                    <td><?echo $row['dateDis'];?></td>
                    <td><?echo $row['dateAr'];?></td>
                    <td><?echo $row['send'];?></td>
                    <td><?echo $row['recive'];?></td>
                    <td><?echo $row['guide'];?></td>
                    <td><?echo $row['amountPack'];?></td>
                    <td><?echo $row['origin'];?></td>
                    <td><?echo $row['destination'];?></td>
                    <td><?echo $row['commission'];?></td>
                    <td><?echo $row['obs'];?></td>
                    <td><?echo $row['idEmploy'];?></td>
                    <td><?echo $row['idRecive'];?></td>
                  </tr>
                </tbody>
                <?}?>
              </table>
            <?}?>
            </div>
          </div>
        </div>

        <?
            }
            if(isset($_POST['buscar_despacho'])) {
              $busqueda = 1;
              if($busqueda = 1){

              if(isset($_POST['idbusqueda'])){
                $id = ($_POST['idbusqueda']);
                $query3 = "SELECT * FROM dispatch WHERE id LIKE '%" .$id. "%'";
                $result3 = mysqli_query($link, $query3);

                while ($row = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {

                  $userId = $row['id'];
                  $trans = $row['transport'];
                  $ds = $row['dateDis'];
                  $dl = $row['dateAr'];
                  $send = $row['send'];
                  $recive = $row['recive'];
                  $guide = $row['guide'];
                  $pack = $row['amountPack'];
                  $origin = $row['origin'];
                  $dest = $row['destination'];
                  $comm = $row['commission'];
                  $obs = $row['obs'];

            ?>
          </form>
            <div class="container">
              <div id="encabezado">
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="font-size: 40px; font-family: monospace"><strong>Modificar este registro</strong></h2>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <form name="Modespacho" action="include/modificar_despacho.php" method="post">

            <div class="container">
              <div id="contenedor">
                <div class="row">
                  <div class="col-md-12">
                    <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Datos del envío para modificar</strong></em></h3>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-sm-1">
                    <input type="text" name="id" value="<? echo $userId;?>" type="hidden">
                  </div>
                  <div class="col-sm-11"></div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Nombre del transporte:</b></span>
                        <input type="text" class="form-control" name="transport" value="<? echo $trans;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Fecha de despacho:</b></span>
                      <input type="date" class="form-control" name="dateDis" value="<? echo $ds;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Fecha de llegada:</b></span>
                      <input type="date" class="form-control" name="dateAr" value="<? echo $dl;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Remitente:</b></span>
                      <input type="text" class="form-control" name="send" value="<? echo $send;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Destinatario:</b></span>
                      <input type="text" class="form-control" name="recive" value="<? echo $recive;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Número de Guía:</b></span>
                      <input type=text class="form-control" name="guide" value="<? echo $guide;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Cantidad de bultos:</b></span>
                      <input type="text" class="form-control" name="amountPack" value="<? echo $pack;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Origen:</b></span>
                      <input type="text" class="form-control" name="origin" value="<? echo $origin;?>" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Destino:</b></span>
                      <input type="text" class="form-control" name="destination" value="<? echo $dest;?>" aria.describedby="basic-addon1" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><b>Comisión:</b></span>
                      <input type="text" class="form-control" name="commission" value="<? echo $comm;?>" aria.describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-md-12">
                    <h4 style="color: white; font-style: italic"><b>Observaciones:</b></h4>
                    <textarea name="obs" class="form-control" style="color: black" cols="177" rows="5" placeholder="Para bajar de renglon escriba <br>" value="<? echo $obs;?>" ></textarea>
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
                    <button type="button" class="btn btn-danger btn-md" style="color: black" onclick="location.href = 'listadespacho.php';"><span class="glyphicon glyphicon-remove"> <strong>Cancelar</strong></span></button>
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
