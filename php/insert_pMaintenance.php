<?php

include('connect.php');

$x1= $_POST['hospital'];
$v1= $_POST['status'];
$v2= $_POST['workNo'];
$v3= $_POST['dateTime1'];
$v4= $_POST['workGroup'];
$v5= $_POST['wrType'];
$v6= $_POST['period'];
$v7= $_POST['assetNo'];
$v8= $_POST['typeCode'];
$v9= $_POST['assetName'];
$v10= $_POST['locationName'];
$v11= $_POST['locationCode'];
$v12= $_POST['departmentName'];
$v13= $_POST['assetStatus'];
$v14= $_POST['assetCritically'];
$v15= $_POST['variationStatus'];
$v16= $_POST['assetCondition'];
$v17= $_POST['brandModel'];
$v18= $_POST['serialNo'];
$v19= $_POST['manufacturer'];
$v20= $_POST['vendor'];
$v21= $_POST['serviceAgent'];
$v22= $_POST['serviceLife'];
$v23= $_POST['contactPerson'];
$v24= $_POST['phoneNo'];
$v25= $_POST['pWorkDate'];
$v26= $_POST['pRepairDate'];
$v27= $_POST['taskNo'];
$v28= $_POST['description'];
$v29= $_POST['targetDate'];
$v30= $_POST['next'];
$v31= $_POST['statusTask'];
$v32= $_POST['requestedDetails'];
$v33= $_POST['cWarrantyInformation'];
$v34= $_POST['cCompanyName'];
$v35= $_POST['cwStartDate'];
$v36= $_POST['cwEndDate'];
$v37= $_POST['telNo'];
$v38= $_POST['pdetailsDesc1'];
$v39= $_POST['uom1'];
$v40= $_POST['qUsedReturned1'];
$v41= $_POST['pdetailsDesc2'];
$v42= $_POST['uom2'];
$v43= $_POST['qUsedReturned2'];
$v44= $_POST['pdetailsDesc3'];
$v45= $_POST['uom3'];
$v46= $_POST['qUsedReturned3'];
$v47= $_POST['employeeNo1'];
$v48= $_POST['nameEmployee1'];
$v49= $_POST['taskCode1'];
$v50= $_POST['dateEmDetails1'];
$v51= $_POST['startTime1'];
$v52= $_POST['endTime1'];
$v53= $_POST['prepHours1'];
$v54= $_POST['employeeNo2'];
$v55= $_POST['nameEmployee2'];
$v56= $_POST['taskCode2'];
$v57= $_POST['dateEmDetails2'];
$v58= $_POST['startTime2'];
$v59= $_POST['endTime2'];
$v60= $_POST['prepHours2'];
$v61= $_POST['employeeNo3'];
$v62= $_POST['nameEmployee3'];
$v63= $_POST['taskCode3'];
$v64= $_POST['dateEmDetails3'];
$v65= $_POST['startTime3'];
$v66= $_POST['endTime3'];
$v67= $_POST['prepHours3'];
$v68= $_POST['performanceTest'];
$v69= $_POST['eSafetyTest'];
$v70= $_POST['ppmAgreedDate'];
$v71= $_POST['dateTimeStarted'];
$v72= $_POST['dateTimeCompleted'];
$v73= $_POST['downtimeHours'];
$v74= $_POST['actionTaken'];
$v75= $_POST['completedBy'];
$v76= $_POST['dateCompleted'];
$v77= $_POST['verifiedBy'];
$v78= $_POST['dateVerified'];
$v79= $_POST['timeCompleted'];
$v80= $_POST['timeVerified'];


$query="INSERT INTO preventivemaintenance (hospital,status, workNo, dateTime1, workGroup, wrType, period, assetNo, typeCode, assetName, locationName, locationCode, departmentName, assetStatus, assetCritically, variationStatus, assetCondition, brandModel, serialNo, manufacturer, vendor, serviceAgent, serviceLife, contactPerson, phoneNo, pWorkDate, pRepairDate, taskNo, description, targetDate, next, statusTask, requestedDetails, cWarrantyInformation, cCompanyName, cwStartDate, cwEndDate, telNo, pdetailsDesc1, uom1, qUsedReturned1, pdetailsDesc2, uom2, qUsedReturned2, pdetailsDesc3, uom3, qUsedReturned3, employeeNo1, nameEmployee1, taskCode1, dateEmDetails1, startTime1, endTime1, prepHours1, employeeNo2, nameEmployee2, taskCode2, dateEmDetails2, startTime2, endTime2, prepHours2, employeeNo3, nameEmployee3, taskCode3, dateEmDetails3, startTime3, endTime3, prepHours3, performanceTest, eSafetyTest, ppmAgreedDate, dateTimeStarted, dateTimeCompleted, downtimeHours, actionTaken, completedBy, dateCompleted, verifiedBy, dateVerified, timeCompleted, timeVerified) VALUES ('$x1','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16','$v17','$v18','$v19','$v20','$v21','$v22','$v23','$v24','$v25','$v26','$v27','$v28','$v29','$v30','$v31','$v32','$v33','$v34','$v35','$v36','$v37','$v38','$v39','$v40','$v41','$v42','$v43','$v44','$v45','$v46','$v47','$v48','$v49','$v50','$v51','$v52','$v53','$v54','$v55','$v56','$v57','$v58','$v59','$v60','$v61','$v62','$v63','$v64','$v65','$v66','$v67','$v68','$v69','$v70','$v71','$v72','$v73','$v74','$v75','$v76','$v77','$v78','$v79','$v80')";

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
header("Location:../profile.php");
  }



?>