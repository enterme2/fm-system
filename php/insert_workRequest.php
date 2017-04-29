<?php

include('connect.php');

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


// Perform a query, check for error
$action="INSERT INTO workrequest (hospital,wrNo,datetime,targetDate,status,requestor,category,assetNo,workgroup,details,startDatetime,endDatetime,actionTaken,actualclosedDate,justificationOutstanding) VALUES ('$hospital','$wrNo','$datetime','$targetDate','$status','$requestor','$category','$assetNo','$workgroup','$details','$startDatetime','$endDatetime','$actionTaken','$actualclosedDate','$justificationOutstanding')";

$query=mysqli_query($db,$action);
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