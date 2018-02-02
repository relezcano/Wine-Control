<?
session_start();
require 'conexion.php';

$id = $_POST['id'];
$name = $_POST['name'];
$last = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$address = $_POST['address'];
$type = $_POST['type'];
$reason = $_POST['reason'];
$obs = $_POST['obs'];

$query = "SELECT idEmploy FROM client WHERE id = '$id'";
$result = mysqli_query($link, $query);

if ($result = $_SESSION['id']) {

  $query1 = "UPDATE client SET name = '$name', lastName = '$last', phone = '$phone', email = '$email', dni = '$dni', address = '$address',
  type = '$type', reason = '$reason', obs = '$obs' WHERE id = '$id'";

  $result1 = mysqli_query($link, $query1);

  mysqli_close($link);

  header ('Location: ../listaclientes.php?alt=10');

}



?>
