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

$query = "UPDATE dispatch SET transport = '$trans1', dateDis = '$ds1', dateAr = '$dl1', send = '$send1', recive = '$recive1', guide = '$guide1',
amountPack = '$pack1', origin = '$origin1', destination = '$dest1', commission = '$comm1', obs = '$obs1' WHERE id = '$id1'";

$result = mysqli_query($link, $query);

mysqli_close($link);

header ('Location: ../listadespacho.php?alt=9');






  // if(isset($_POST['guardar'])){
  //   $trans1 = $_POST['transport']; //PROBAR SI FUNCIONA $_POST['XXXXX'] PARA MODIFICAR LOS DATOS DE LA TABLA...
  //   $sql1 = "UPDATE dispatch SET transport = '$trans', dateDis = '$ds', dateAr = '$dl', send = '$send', recive = '$recive', guide = '$guide',
  //   amountPack = '$pack', origin = '$origin', destination = '$dest', commission = '$comm', obs = '$obs' WHERE id = '$id'";
  //   mysqli_query($link, $sql1);
  //   mysqli_free_result($result);
  //   header ('Location: listadespacho.php?alt=9');

//   if(isset($_POST['guardar'])){
//     $id = $GLOBALS['id'];
//     $query1 = "SELECT * FROM dispatch WHERE id = '$id'";
//     $rec1 = mysqli_query($link, $query1);
//     $despacho1 = 1;
//
//     if($despacho1 = 1){
//
//       $trans1 = ($_POST['transport']);
//       $ds1 = ($_POST['dateDis']);
//       $dl1 = ($_POST['dateAr']);
//       $send1 = ($_POST['send']);
//       $recive1 = ($_POST['recive']);
//       $guide1 = ($_POST['guide']);
//       $pack1 = ($_POST['amountPack']);
//       $origin1 = ($_POST['origin']);
//       $dest1 = ($_POST['destination']);
//       $comm1 = ($_POST['commission']);
//       $obs1 = ($_POST['obs']);
//
//
//       $sql1 = "UPDATE dispatch SET transport = '$trans1', dateDis = '$ds1', dateAr = '$dl1', send = '$send1', recive = '$recive1', guide = '$guide1',
//       amountPack = '$pack1', origin = '$origin1', destination = '$dest1', commission = '$comm1', obs = '$obs1' WHERE id = '$id1'";
//       mysqli_query($link, $sql1);
//       mysqli_free_result($result);
//       header ('Location: ../listadespacho.php?alt=9');
//     }
//   }
// }
//   mysqli_close($link);
//   ?>
