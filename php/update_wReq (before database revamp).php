<?php 
require('connect.php');

$id = $_POST['id'];

$x1=$_POST['status'];
$x2=$_POST['hospitalName'];

$w1 = $_POST['reqDateTime'];
$w2 = $_POST['wrNo'];
$w3 = $_POST['Ref'];

$v1 = $_POST['RequestedBy'];
$v2 = $_POST['JobTitle'];
$v3 = $_POST['ContactNo'];
$v4 = $_POST['Dept'];
$v5 = $_POST['AssetNo'];
$v6 = $_POST['AssetName'];
$v7 = $_POST['LocationCode'];
$v8 = $_POST['LocationName'];
$v9 = $_POST['WorkGroup'];
$v10 = $_POST['VariationStatus'];
$v11 = $_POST['WorkCategory'];
$v12 = $_POST['ConditionStatus'];
$v13 = $_POST['RequestedDetails'];
$v14 = $_POST['IDName'];
$v15= $_POST['TargetDate'];
$v16= $_POST['rSignature'];
$v17 = $_POST['dTime'];
$v18 = $_POST['aDetails'];
$v19 = $_POST['amStatus'];
$v20 = $_POST['lProvided'];
$v21 = $_POST['aInfo'];
$v22 = $_POST['lStartDateTime'];
$v23 = $_POST['lEndDateTime'];
$v24 = $_POST['lReceivedBy'];
$v25 = $_POST['lReturnBy'];
$v26 = $_POST['d1'];
$v27 = $_POST['u1'];
$v28 = $_POST['q1'];
$v29 = $_POST['d2'];
$v30 = $_POST['u2'];
$v31 = $_POST['q2'];
$v32 = $_POST['d3'];
$v33 = $_POST['u3'];
$v34 = $_POST['q3'];
$v35 = $_POST['eNo1'];
$v36 = $_POST['eN1'];
$v37 = $_POST['tC1'];
$v38 = $_POST['date1'];
$v39 = $_POST['sTime1'];
$v40 = $_POST['eTime1'];
$v41 = $_POST['rHour1'];
$v42 = $_POST['eNo2'];
$v43 = $_POST['eN2'];
$v44 = $_POST['tC2'];
$v45 = $_POST['date2'];
$v46 = $_POST['sTime2'];
$v47 = $_POST['eTime2'];
$v48 = $_POST['rHour2'];
$v49 = $_POST['eNo3'];
$v50 = $_POST['eN3'];
$v51 = $_POST['tC3'];
$v52 = $_POST['date3'];
$v53 = $_POST['sTime3'];
$v54 = $_POST['eTime3'];
$v55 = $_POST['rHour3'];
$v56 = $_POST['eNo4'];
$v57 = $_POST['eN4'];
$v58 = $_POST['tC4'];
$v59 = $_POST['date4'];
$v60 = $_POST['sTime4'];
$v61 = $_POST['eTime4'];
$v62 = $_POST['rHour4'];
$v63 = $_POST['dtwS'];
$v64 = $_POST['dtwC'];
$v65 = $_POST['aTaken'];
$v66 = $_POST['esTest'];
$v67 = $_POST['pTest'];
$v68 = $_POST['qcppm'];
$v69 = $_POST['qcuptime'];
$v70 = $_POST['nameCompleted'];
$v71 = $_POST['sCompleted'];
$v72 = $_POST['nameVerified'];
$v73 = $_POST['sVerified'];
$v74 = $_POST['dVerified'];
$v75 = $_POST['datetimeCompleted'];
//$v76 = $_POST['timeCompleted'];
$v77 = $_POST['datetimeVerified'];
//$v78 = $_POST['timeVerified'];


$query="UPDATE workrequest SET 
	status='$x1',
	hospitalName='$x2',
	reqDateTime='$w1',
	wrNo='$w2',
	Ref='$w3',
	RequestedBy='$v1',
	JobTitle='$v2',
	ContactNo='$v3',
	Dept='$v4',
	AssetNo='$v5',
	AssetName='$v6',
	LocationCode='$v7',
	LocationName='$v8',
	WorkGroup='$v9',
	VariationStatus='$v10',
	WorkCategory='$v11',
	ConditionStatus='$v12',
	RequestedDetails='$v13',
	IDName='$v14',
	TargetDate='$v15',
	rSignature='$v16',
	dTime='$v17',
	aDetails='$v18',
	amStatus='$v19',
	lProvided='$v20',
	aInfo='$v21',
	lStartDateTime='$v22',
	lEndDateTime='$v23',
	lReceivedBy='$v24',
	lReturnBy='$v25',
	d1='$v26',
	u1='$v27',
	q1='$v28',
	d2='$v29',
	u2='$v30',
	q2='$v31',
	d3='$v32',
	u3='$v33',
	q3='$v34',
	eNo1='$v35',
	eN1='$v36',
	tC1='$v37',
	date1='$v38',
	sTime1='$v39',
	eTime1='$v40',
	rHour1='$v41',
	eNo2='$v42',
	eN2='$v43',
	tC2='$v44',
	date2='$v45',
	sTime2='$v46',
	eTime2='$v47',
	rHour2='$v48',
	eNo3='$v49',
	eN3='$v50',
	tC3='$v51',
	date3='$v52',
	sTime3='$v53',
	eTime3='$v54',
	rHour3='$v55',
	eNo4='$v56',
	eN4='$v57',
	tC4='$v58',
	date4='$v59',
	sTime4='$v60',
	eTime4='$v61',
	rHour4='$v62',
	dtwS='$v63',
	dtwC='$v64',
	aTaken='$v65',
	esTest='$v66',
	pTest='$v67',
	qcppm='$v68',
	qcuptime='$v69',
	nameCompleted='$v70',
	sCompleted='$v71',
	nameVerified='$v72',
	sVerified='$v73',
	dVerified='$v74',
	datetimeCompleted='$v75',
	datetimeVerified='$v77'
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
header("Location:../showAll_wRequest.php");
}
?>