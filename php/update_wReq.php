<?php 
require('connect.php');

$id = $_POST['id'];
$hospital = $_POST['hospital'];
$wrNo = $_POST['wrNo'];
$datetime = $_POST['datetime'];
$targetDate = $_POST['targetDate'];
//$ageing = $_POST['ageing'];
$status = $_POST['status'];
$requestor = $_POST['requestor'];
$category = $_POST['category'];
$assetNo = $_POST['assetNo'];
$workgroup = $_POST['workgroup'];
$details = $_POST['details'];
$startDatetime = $_POST['startDatetime'];
$endDatetime = $_POST['endDatetime'];
$actionTaken = $_POST['actionTaken'];
$actualclosedDate = $_POST['actualclosedDate'];
$justificationOutstanding = $_POST['justificationOutstanding'];


$query="UPDATE workrequest SET 
hospital = '$hospital',
wrNo = '$wrNo',
datetime = '$datetime',
targetDate = '$targetDate',
status = '$status',
requestor = '$requestor',
category = '$category',
assetNo = '$assetNo',
workgroup = '$workgroup',
details = '$details',
startDatetime = '$startDatetime',
endDatetime = '$endDatetime',
actionTaken = '$actionTaken',
actualclosedDate = '$actualclosedDate',
justificationOutstanding = '$justificationOutstanding'
WHERE ID='$id' ";

$query=mysqli_query($db,$query);
if (!$query)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }
else{
mysqli_free_result($query);
mysqli_close($db);
header("Location:../showAll_wRequest.php");
}
?>