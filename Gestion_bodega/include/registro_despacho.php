<?php
session_start();

require 'conexion.php';

if(isset($_POST['guardar'])) {
  if($_POST['transport'] == '' or $_POST['dateDis'] == '' or $_POST['dateAr'] == '' or $_POST['send'] == '' or $_POST['recive'] == '' or $_POST['guide'] == '' or $_POST['amountPack'] ==
  '' or $_POST['origin'] == '' or $_POST['destination'] == '' or $_POST['commission'] == '' or $_POST['obs'] == '') {
    echo 'Por favor complete todos los campos para poder continuar.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
  }else {
    $query = 'SELECT * FROM dispatch';
    $rec = mysqli_query($link, $query);
    $despacho = 1;
    }

    if($despacho == 1)
      {
          $form_tran = ($_POST['transport']);
          $form_ds = ($_POST['dateDis']);
          $form_dl = ($_POST['dateAr']);
          $form_send = ($_POST['send']);
          $form_recive = ($_POST['recive']);
          $form_guide = ($_POST['guide']);
          $form_pack = ($_POST['amountPack']);
          $form_origin = ($_POST['origin']);
          $form_dest = ($_POST['destination']);
          $form_comm = ($_POST['commission']);
          $form_obs = ($_POST['obs']);
          $idEmploy = $_SESSION['id'];

          $sql = "INSERT INTO dispatch (transport, dateDis, dateAr, send, recive, guide, amountPack, origin, destination, commission, obs, idEmploy)
          VALUES ('$form_tran', '$form_ds', '$form_dl', '$form_send', '$form_recive', '$form_guide', '$form_pack', '$form_origin', '$form_dest', '$form_comm', '$form_obs', '$idEmploy')";//Se insertan los datos a la base de datos.
          mysqli_query($link, $sql);

          header('Location: ../despacho.php?alt=7');
        }else {
          header('Location: ../despacho.php?alt=8');
        }
      }


  mysqli_close($link);

?>
