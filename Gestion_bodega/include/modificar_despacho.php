<?
session_start();
require 'conexion.php';

$id1 = $_POST['id'];
$trans1 = $_POST['transport'];
$ds1 = $_POST['dateDis'];
$dl1 = $_POST['dateAr'];
$send1 = $_POST['send'];
$recive1 = $_POST['recive'];
$guide1 = $_POST['guide'];
$pack1 = $_POST['amountPack'];
$origin1 = $_POST['origin'];
$dest1 = $_POST['destination'];
$comm1 = $_POST['commission'];
$obs1 = $_POST['obs'];

$query = "SELECT idEmploy FROM client WHERE id = '$id1'";
$result = mysqli_query($link, $query);

if ($result = $_SESSION['id']) {
  if ($_POST['obs'] != ''){

    $query1 = "UPDATE dispatch SET transport = '$trans1', dateDis = '$ds1', dateAr = '$dl1', send = '$send1', recive = '$recive1', guide = '$guide1',
    amountPack = '$pack1', origin = '$origin1', destination = '$dest1', commission = '$comm1', obs = '$obs1' WHERE id = '$id1'";

    $result1 = mysqli_query($link, $query1);
  } else {

    $query1 = "UPDATE dispatch SET transport = '$trans1', dateDis = '$ds1', dateAr = '$dl1', send = '$send1', recive = '$recive1', guide = '$guide1',
    amountPack = '$pack1', origin = '$origin1', destination = '$dest1', commission = '$comm1' WHERE id = '$id1'";

    $result1 = mysqli_query($link, $query1);
  }

  mysqli_close($link);

  header ('Location: ../listadespacho.php?alt=9');
}

?>
