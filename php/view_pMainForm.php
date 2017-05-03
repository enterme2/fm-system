<?php
require('php/connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
$id = $_GET['id'];
}

// Perform an SQL query
$sql = "SELECT * FROM preventivemaintenance WHERE ID = $id";
$result = mysqli_query($db,$sql);
if (!$result) 
    {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    // Again, do not do this on a public site, but we'll show you how
    // to get the error information
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo("Error description: " . mysqli_errno($db));
    echo("Error description: " . mysqli_error($db));
    exit;
}

//

$test=mysqli_fetch_assoc($result);

if (!$result) 
		{
		die('Error: Data not found..');
		}


$hospital = $test['hospital'];
$wrNo = $test['wrNo'];
$dateRequested = $test['dateRequested'];
$timeRequested = $test['timeRequested'];
if($timeRequested=="00:00:00"){$timeRequested=NULL;}
$targetdate = $test['targetdate'];
$ageing = $test['ageing'];
$status = $test['status'];
if($status=="")
    {
        $selected1="";
        $selected2="";
        $selected3="";
    }
elseif ($status=="Open")
    {
        $selected1="selected";
        $selected2="";
        $selected3="";  
    }
elseif ($status=="Pending")
    {
        $selected2="selected";
        $selected1="";
        $selected3="";
    }
elseif ($status=="Closed")
    {
        $selected3="selected";
        $selected2="";
        $selected1="";
    }
$type = $test['type'];
$assetNo = $test['assetNo'];
$assetDesc = $test['assetDesc'];
$workgroup = $test['workgroup'];
$details = $test['details'];
$taskDesc = $test['taskDesc'];

$startDatetime = $test['startDatetime'];
$startdatetimeView = date("Y-m-d\TH:i:s", strtotime($startDatetime));

$endDatetime = $test['endDatetime'];
$enddatetimeView = date("Y-m-d\TH:i:s", strtotime($endDatetime));

$actionTaken = $test['actionTaken'];
$actualclosedDate = $test['actualclosedDate'];
$justificationOutstanding = $test['justificationOutstanding'];


mysqli_free_result($result);
mysqli_close($db);
?>