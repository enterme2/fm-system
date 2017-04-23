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


$x1= $test['hospital'];
$v1= $test['status'];
//to view status
    if($v1=="")
    {
        $selected1="";
        $selected2="";
        $selected3="";
    }
    if($v1=="Open")
    {
        $selected1="selected";
        $selected2="";
        $selected3="";  
    }
    if($v1=="Pending")
    {
        $selected2="selected";
        $selected1="";
        $selected3="";
    }
    if($v1=="Closed")
    {
        $selected3="selected";
        $selected2="";
        $selected1="";
    }
    //end view
$v2= $test['workNo'];
$v3= $test['dateTime1'];
$dateView = date("Y-m-d\TH:i:s", strtotime($v3));

$v4= $test['workGroup'];
$v5= $test['wrType'];
$v6= $test['period'];
$v7= $test['assetNo'];
$v8= $test['typeCode'];
$v9= $test['assetName'];
$v10= $test['locationName'];
$v11= $test['locationCode'];
$v12= $test['departmentName'];
$v13= $test['assetStatus'];
$v14= $test['assetCritically'];
$v15= $test['variationStatus'];
$v16= $test['assetCondition'];
$v17= $test['brandModel'];
$v18= $test['serialNo'];
$v19= $test['manufacturer'];
$v20= $test['vendor'];
$v21= $test['serviceAgent'];
$v22= $test['serviceLife'];
$v23= $test['contactPerson'];
$v24= $test['phoneNo'];
$v25= $test['pWorkDate'];
$v26= $test['pRepairDate'];
$v27= $test['taskNo'];
$v28= $test['description'];
$v29= $test['targetDate'];
$v30= $test['next'];
$v31= $test['statusTask'];
$v32= $test['requestedDetails'];
$v33= $test['cWarrantyInformation'];
$v34= $test['cCompanyName'];
$v35= $test['cwStartDate'];
$v36= $test['cwEndDate'];
$v37= $test['telNo'];
$v38= $test['pdetailsDesc1'];
$v39= $test['uom1'];
$v40= $test['qUsedReturned1'];
$v41= $test['pdetailsDesc2'];
$v42= $test['uom2'];
$v43= $test['qUsedReturned2'];
$v44= $test['pdetailsDesc3'];
$v45= $test['uom3'];
$v46= $test['qUsedReturned3'];
$v47= $test['employeeNo1'];
$v48= $test['nameEmployee1'];
$v49= $test['taskCode1'];
$v50= $test['dateEmDetails1'];
$v51= $test['startTime1'];
if($v51=="00:00:00"){$v51=NULL;}
$v52= $test['endTime1'];
if($v52=="00:00:00"){$v52=NULL;}
$v53= $test['prepHours1'];
$v54= $test['employeeNo2'];
$v55= $test['nameEmployee2'];
$v56= $test['taskCode2'];
$v57= $test['dateEmDetails2'];
$v58= $test['startTime2'];
if($v58=="00:00:00"){$v58=NULL;}
$v59= $test['endTime2'];
if($v59=="00:00:00"){$v59=NULL;}
$v60= $test['prepHours2'];
$v61= $test['employeeNo3'];
$v62= $test['nameEmployee3'];
$v63= $test['taskCode3'];
$v64= $test['dateEmDetails3'];
$v65= $test['startTime3'];
if($v65=="00:00:00"){$v65=NULL;}
$v66= $test['endTime3'];
if($v66=="00:00:00"){$v66=NULL;}
$v67= $test['prepHours3'];
$v68= $test['performanceTest'];
$v69= $test['eSafetyTest'];
$v70= $test['ppmAgreedDate'];
$v71= $test['dateTimeStarted'];
$v72= $test['dateTimeCompleted'];
$v73= $test['downtimeHours'];
$v74= $test['actionTaken'];
$v75= $test['completedBy'];
$v76= $test['dateCompleted'];
$v77= $test['verifiedBy'];
$v78= $test['dateVerified'];
$v79= $test['timeCompleted'];
if($v79=="00:00:00"){$v79=NULL;}
$v80= $test['timeVerified'];
if($v80=="00:00:00"){$v80=NULL;}

mysqli_free_result($result);
mysqli_close($db);
?>