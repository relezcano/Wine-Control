<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/listaclientes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
      if(isset($_GET['alt'])){
        if($_GET['alt'] == 10){
          echo '<script lenguage="javascript">alert("Cliente modificado exitosamente!!");</script>';
        } elseif($_GET['alt'] == 11) {
          echo '<script lenguage="javascript">alert("Por favor escriba el ID del cliente que desea modificar y luego presione el botón "Buscar".");</script>';
        }
      }
    ?>

    <br>


    <div class="container-fluid" style="background-color: black; padding-top: 10px; padding-bottom: 30px; opacity: 0.9; color: white; border-radius: 60px">
      <form name="ListaClientes" action="listaclientes.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 26px"><em><strong>Refresque la lista presionando el botón <span class="glyphicon glyphicon-refresh">Actualizar</span><br> para mostrar todos los clientes guardados.</strong></em></h3>
          <h4 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 20px"><em><strong>Si desea modificar algún dato del cliente, escriba el nº de ID de dicho cliente y haga click en la lupa.</strong></em></h4>
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
        <form name="modificar" action="listaclientes.php" method="post">
        <div class="row">
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><b>Numero de ID:</b></span>
              <input type="text" class="form-control" name="idbusqueda" placeholder="Escriba aquí el ID" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="col-md-3"><button type="submit" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="buscar_cliente" class="btn btn-success btn-md"><span class="glyphicon glyphicon-search"></span></button></div>
          <div class="col-md-6"></div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <?
              session_start();

              require 'include/conexion.php';

              if(isset($_POST['refresh'])) {
                if ($_SESSION['winery'] == 1) {
                  $query = "SELECT * FROM client ORDER BY id DESC";
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
                      <th scope="col">DNI/CUIT</th>
                      <th scope="col">Dirección</th>
                      <th scope="col">Tipo de cliente</th>
                      <th scope="col">Razón social</th>
                      <th scope="col">Detalles</th>
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
                        <td><?echo $row['email'];?></td>
                        <td><?echo $row['dni'];?></td>
                        <td><?echo $row['address'];?></td>
                        <td><?echo $row['type'];?></td>
                        <td><?echo $row['reason'];?></td>
                        <td><?echo $row['obs'];?></td>
                        <td><?echo $row['idEmploy'];?></td>
                    </tr>
                  </tbody>
                  <?}?>
                </table>
                <?}else{
              $idActual = $_SESSION['id'];
              $query1 = "SELECT * FROM client WHERE idEmploy = '$idActual' ORDER BY id DESC";
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
                    <th scope="col">E-mail</th>
                    <th scope="col">DNI/CUIT</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Tipo de cliente</th>
                    <th scope="col">Razón social</th>
                    <th scope="col">Detalles</th>
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
                      <td><?echo $row['email'];?></td>
                      <td><?echo $row['dni'];?></td>
                      <td><?echo $row['address'];?></td>
                      <td><?echo $row['type'];?></td>
                      <td><?echo $row['reason'];?></td>
                      <td><?echo $row['obs'];?></td>
                      <td><?echo $row['idEmploy'];?></td>
                  </tr>
                </tbody>
                <?}?>
              </table>
            <?}?>
            </div>
          </div>
        </div>

        <?
        //BUSCAR CLIENTES
            }
            if(isset($_POST['buscar_cliente'])) {
              $busqueda = 1;
              if($busqueda = 1){

              if(isset($_POST['idbusqueda'])){
                $id = ($_POST['idbusqueda']);
                $query = "SELECT * FROM client WHERE id LIKE '%" .$id. "%'";
                $result = mysqli_query($link, $query);

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                  $userId = $row['id'];
                  $name = $row['name'];
                  $last = $row['lastName'];
                  $phone = $row['phone'];
                  $email = $row['email'];
                  $dni = $row['dni'];
                  $address = $row['address'];
                  $type = $row['type'];
                  $reason = $row['reason'];
                  $obs = $row['obs'];


            ?>
          </form>
            <form name="Modcliente" action="include/modificar_cliente.php" method="post">

              <div class="container" style="background-color: black; padding-top: 25px; padding-bottom: 10px; opacity: 0.8; color: white; border-radius: 60px">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 style="text-align: center; color: white; font-family: arial sans-serif; font-size: 36px"><em><strong>Modificar datos del cliente</strong></em></h3>
                    </div>
                  </div>
                  <br>
                  <div class="row" hidden>
                    <div class="col-sm-1">
                      <input type="text" name="id" value="<? echo $userId;?>" type="hidden">
                    </div>
                    <div class="col-sm-11"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Nombre:</b></span>
                        <input type="text" class="form-control" name="name" value="<?echo $name;?>" aria-describedby="basic-addon1" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Apellido:</b></span>
                        <input type="text" class="form-control" name="lastName" value="<?echo $last;?>" aria-describedby="basic-addon1" required>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Teléfono:</b></span>
                        <input type="text" class="form-control" name="phone" value="<?echo $phone;?>" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
                        <input type="email" class="form-control" name="email" value="<?echo $email;?>" aria-describedby="basic-addon1" required>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Documento/CUIT :</b></span>
                        <input type="text" class="form-control" name="dni" value="<?echo $dni;?>" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><b>Dirección:</b></span>
                        <input type="text" class="form-control" name="address" value="<?echo $address;?>" aria-describedby="basic-addon1" required>
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
                            <option value="<?echo $type;?>"></option>
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
                        <input type="text" class="form-control" name="reason" value="<?echo $reason;?>" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h4 style="color: white; font-style: italic"><b>Observaciones:</b></h4>
                      <textarea name="obs" class="form-control" style="color: black" cols="177" rows="5"><?echo $obs;?></textarea>
                    </div>
                  </div>

                  <br>
                  <br>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-2 reg">
                      <button type="submit" class="btn btn-success btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" name="registrar"><span class="glyphicon glyphicon-ok"></span> <strong>Guardar</strong></button>
                    </div>
                    <div class="col-md-2 reg">
                      <button type="button" class="btn btn-danger btn-md" style="color: black; border-color: white; border-weight: medium; border-style: solid" onclick="location.href = 'listaclientes.php';"><span class="glyphicon glyphicon-remove"></span> <strong>Cancelar</strong></button>
                    </div>
                    <div class="col-md-4"></div>
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
