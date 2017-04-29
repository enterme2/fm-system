<?php
require('php/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
}

// Perform an SQL query
$sql = "SELECT * FROM workrequest WHERE ID = $id";
if (!$result = $db->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $db->errno . "\n";
    echo "Error: " . $db->error . "\n";
    exit;
}


$test = $result->fetch_assoc();

if (!$result) 
		{
		die('Error: Data not found..');
		}

$status = $test['status'];
//to view status
    if($status=="")
    {
        $selected1="";
        $selected2="";
        $selected3="";
    }
    if($status=="Open")
    {
        $selected1="selected";
        $selected2="";
        $selected3="";  
    }
    if($status=="Pending")
    {
        $selected2="selected";
        $selected1="";
        $selected3="";
    }
    if($status=="Closed")
    {
        $selected3="selected";
        $selected2="";
        $selected1="";
    }

$hospital = $test['hospital'];
$wrNo = $test['wrNo'];
$datetime = $test['datetime'];
$datetimeView = date("Y-m-d\TH:i:s", strtotime($datetime));

$targetDate = $test['targetDate'];
//$ageing = $test['ageing'];
$status = $test['status'];
$requestor = $test['requestor'];
$category = $test['category'];
$assetNo = $test['assetNo'];
$workgroup = $test['workgroup'];
$details = $test['details'];
$startDatetime = $test['startDatetime'];
$startdatetimeView = date("Y-m-d\TH:i:s", strtotime($startDatetime));

$endDatetime = $test['endDatetime'];
$enddatetimeView = date("Y-m-d\TH:i:s", strtotime($endDatetime));

$actionTaken = $test['actionTaken'];
$actualclosedDate = $test['actualclosedDate'];
$justificationOutstanding = $test['justificationOutstanding'];


$result->free();
//mysqli_free_result($result);
$db->close();
//mysqli_close($db);
?>