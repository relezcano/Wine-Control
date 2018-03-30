<?php
session_start();

require 'conexion.php';

if(isset($_POST['registrar'])) {
  if($_POST['name'] == '' or $_POST['lastName'] == '' or $_POST['phone'] == '' or $_POST['email'] == '' or $_POST['dni'] == '' or $_POST['address'] == '' or $_POST['type'] == '') {
    echo 'Por favor complete todos los campos para poder continuar.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
  }else {
    $query = 'SELECT * FROM client';
    $result = mysqli_query($link, $query);
    $verificar_usuario = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condición que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar

    while($resultado = mysqli_fetch_object($result)) {
      if($resultado->dni == $_POST['dni']) { //Esta condición verifica si ya existe el usuario
        $verificar_usuario = 1;
      }
    }

    if($verificar_usuario == 0)
      {
          $form_name = ($_POST['name']);
          $form_last = ($_POST['lastName']);
          $form_phone = ($_POST['phone']);
          $form_email = ($_POST['email']);
          $form_dni = ($_POST['dni']);
          $form_address = ($_POST['address']);
          $form_type = ($_POST['type']);
          $form_reason = ($_POST['reason']);
          $form_obs = ($_POST['obs']);
          $idEmploy = $_SESSION['id'];

          $query = "INSERT INTO client (name, lastName, phone, email, dni, address, type, reason, obs, idEmploy) VALUES ('$form_name', '$form_last', '$form_phone', '$form_email', '$form_dni', '$form_address', '$form_type', '$form_reason', '$form_obs', '$idEmploy')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
          mysqli_query($link, $query);

          header('Location: ../agregar_cliente.php?alt=4');
        }else {
          header('Location: ../agregar_cliente.php?alt=5');
        }
      }
    }

  mysqli_close($link);

?>
