<?php 
require('connect.php');

$id = $_POST['id'];


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


$query="UPDATE preventivemaintenance SET 
hospital='$x1',
status='$v1',
workNo='$v2',
dateTime1='$v3',
workGroup='$v4',
wrType='$v5',
period='$v6',
assetNo='$v7',
typeCode='$v8',
assetName='$v9',
locationName='$v10',
locationCode='$v11',
departmentName='$v12',
assetStatus='$v13',
assetCritically='$v14',
variationStatus='$v15',
assetCondition='$v16',
brandModel='$v17',
serialNo='$v18',
manufacturer='$v19',
vendor='$v20',
serviceAgent='$v21',
serviceLife='$v22',
contactPerson='$v23',
phoneNo='$v24',
pWorkDate='$v25',
pRepairDate='$v26',
taskNo='$v27',
description='$v28',
targetDate='$v29',
next='$v30',
statusTask='$v31',
requestedDetails='$v32',
cWarrantyInformation='$v33',
cCompanyName='$v34',
cwStartDate='$v35',
cwEndDate='$v36',
telNo='$v37',
pdetailsDesc1='$v38',
uom1='$v39',
qUsedReturned1='$v40',
pdetailsDesc2='$v41',
uom2='$v42',
qUsedReturned2='$v43',
pdetailsDesc3='$v44',
uom3='$v45',
qUsedReturned3='$v46',
employeeNo1='$v47',
nameEmployee1='$v48',
taskCode1='$v49',
dateEmDetails1='$v50',
startTime1='$v51',
endTime1='$v52',
prepHours1='$v53',
employeeNo2='$v54',
nameEmployee2='$v55',
taskCode2='$v56',
dateEmDetails2='$v57',
startTime2='$v58',
endTime2='$v59',
prepHours2='$v60',
employeeNo3='$v61',
nameEmployee3='$v62',
taskCode3='$v63',
dateEmDetails3='$v64',
startTime3='$v65',
endTime3='$v66',
prepHours3='$v67',
performanceTest='$v68',
eSafetyTest='$v69',
ppmAgreedDate='$v70',
dateTimeStarted='$v71',
dateTimeCompleted='$v72',
downtimeHours='$v73',
actionTaken='$v74',
completedBy='$v75',
dateCompleted='$v76',
verifiedBy='$v77',
dateVerified='$v78',
timeCompleted='$v79',
timeVerified='$v80'
WHERE id='$id' ";

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
header("Location:../showAll_pMaintenance.php");
}
?>