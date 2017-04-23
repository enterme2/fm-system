<?php

include('connect.php');

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

/*
if(!empty($_POST['sTime1']))
{
	$v39 = $_POST['sTime1'];
	echo $v39;
	exit();
}
else{
	
	$v39=NULL;
	echo ("Value of $v39:" .$v39) ;
	echo  ("HELLO WORLD");
	exit();
}
*/
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
//start here
$v70 = $_POST['nameCompleted'];
$v71 = $_POST['sCompleted'];
$v72 = $_POST['nameVerified'];
$v73 = $_POST['sVerified'];
$v74 = $_POST['dVerified'];

$v75 = $_POST['dateCompleted'];
$v76 = $_POST['timeCompleted'];
$v77 = $_POST['dateVerified'];
$v78 = $_POST['timeVerified'];
/*
//MissedStart
	 $x1 = $test['dateDV01'];
	 $x2 = $test['timeDV01'];
	 $x3 = $test['dateDV02'];
	 $x4 = $test['timeDV02'];
	 $x5 = $test['dVerified'];
//MissedEnd
$v74 = $_POST['dateCompleted'];
$v75 = $_POST['timeCompleted'];
$v76 = $_POST['dateVerified'];
$v77 = $_POST['timeVerified'];
$v78 = $_POST['validaton'];
$v79 = $_POST['vF1'];
$v80 = $_POST['vF4'];
$v81 = $_POST['vF5'];
$v82 = $_POST['vF6'];
$v83 = $_POST['vJustify'];
*/

// Perform a query, check for error
$query=mysqli_query($db,"INSERT INTO workrequest (status,reqDateTime,hospitalName,wrNo,requestedBy,jobTitle,Ref,ContactNo,Dept,AssetNo,AssetName,LocationCode,LocationName,WorkGroup,VariationStatus,WorkCategory,ConditionStatus,RequestedDetails,IDName,TargetDate,rSignature,dTime,aDetails,amStatus,lProvided,aInfo,lStartDateTime,lEndDateTime,lReceivedBy,lReturnBy,d1,u1,q1,d2,u2,q2,d3,u3,q3,eNo1,eN1,tC1,date1,sTime1,eTime1,rHour1,eNo2,eN2,tC2,date2,sTime2,eTime2,rHour2,eNo3,eN3,tC3,date3,sTime3,eTime3,rHour3,eNo4,eN4,tC4,date4,sTime4,eTime4,rHour4,dtwS,dtwC,aTaken,esTest,pTest,qcppm,qcuptime,nameCompleted,sCompleted,nameVerified,sVerified,dVerified,dateCompleted,timeCompleted,dateVerified,timeVerified) VALUES ('$x1','$w1','$x2','$w2','$v1','$v2','$w3','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$v15','$v16','$v17','$v18','$v19','$v20','$v21','$v22','$v23','$v24','$v25','$v26','$v27','$v28','$v29','$v30','$v31','$v32','$v33','$v34','$v35','$v36','$v37','$v38','$v39','$v40','$v41','$v42','$v43','$v44','$v45','$v46','$v47','$v48','$v49','$v50','$v51','$v52','$v53','$v54','$v55','$v56','$v57','$v58','$v59','$v60','$v61','$v62','$v63','$v64','$v65','$v66','$v67','$v68','$v69','$v70','$v71','$v72','$v73','$v74','$v75','$v76','$v77','$v78')");
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