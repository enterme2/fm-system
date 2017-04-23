<?php

require('php/view_wReqForm.php');
?>

 <!DOCTYPE html>


<html>
<head>
<title>Work Request Edit</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">

</head>
<body>

<center><h1>Work Request (FEMS)</h1></center>

<form action="php/update_wReq.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table>
<tr>
	<th></th><th></th>
	<th></th><th></th>
	<th align="right">Status :</th>
	<th align="left">  
	<select name="status">
    <option value="Open" <?php echo $selected1 ?> >Open</option>
    <option value="Pending" <?php echo $selected2 ?> >Pending</option>
    <option value="Closed" <?php echo $selected3 ?> >Closed</option>
  	</select> 
  	</th>
</tr>
<tr>
	<th></th><th></th>
	<th></th><th></th>
	<th align="right">Request Date/Time :</th><th><input type="datetime-local" name="reqDateTime" value='<?php echo $dateView ?>' </th>
</tr>
<tr>
	<th align="right">Hospital:</th><th align="left"><input type="text" value='<?php echo $x1 ?>'></th>
	<th></th><th></th>
	<th align="right">WR NO :</th><th align="left"><input type="text" name="wrNo" value='<?php echo $w2 ?>'> </th>
</tr>
<tr><th><b>A. <u>Work Request</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">Requested by :</th><th align="left"><input type='text' name='RequestedBy' value='<?php echo $v1 ?>'</th>
	<th align="right">Job Title :</th><th align="left"><input type='text' name='JobTitle' value='<?php echo $v2 ?>'> </th>
	<th align="right">Ref :</th><th align="left"><input type='text' name='Ref' value='<?php echo $w3 ?>'> </th>
</tr>
<tr>
	<th align="right">Contact No :</th><th align="left"><input type='text' name='ContactNo' value='<?php echo $v3 ?>' ></th>
	<th align="right">Dept :</th><th align="left"><input type='text' name='Dept' value='<?php echo $v4 ?>'></th>
</tr>
<tr>
	<th align="right">AssetNo : </th><th align="left"><input type='text' name='AssetNo' value='<?php echo $v5 ?>'></th>
	<th align="right">Asset name : </th>
	<th align="left">
	<textarea rows="2" cols="30" input type="text" name="AssetName"><?php echo $v6 ?></textarea>
	</th>
</tr>
<tr>
	<th align="right">Location Code :</th><th align="left"> <input type='text' name='LocationCode' value='<?php echo $v7 ?>'></th>
	<th align="right">Location Name :</th><th align="left"> <input size="30" type='text' name='LocationName' value='<?php echo $v8 ?>'></th>
</tr>
<tr>
	<th align="right">Work Group : </th><th align="left"><input type='text' name='WorkGroup' value='<?php echo $v9 ?>'></th>
	<th align="right">Variation Status : </th><th align="left"><input type='text' name='VariationStatus' value='<?php echo $v10 ?>'></th>
</tr>
<tr>
	<th align="right">Work Category : </th><th align="left"><input type='text' name='WorkCategory' value='<?php echo $v11 ?>'></th>
	<th align="right">Condition Status : </th><th align="left"><input type='text' name='ConditionStatus' value='<?php echo $v12 ?>'></th>
</tr>
<tr>
	<th align="right">Requested Details : </th>
	<th align="left">
	<textarea rows="4" cols="35" input type="text" name="RequestedDetails"><?php echo $v13 ?></textarea>
	</th>
</tr>
<tr><th></th></tr>
<tr><th><b>B. <u>Assessment </b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">ID/Name : </th><th align="left"><input type='text' name='IDName' value='<?php echo $v14 ?>'></th>
	<th align="right">Target Date : </th><th align="left"><input type='date' name='TargetDate' value='<?php echo $v15 ?>'></th>
</tr>
<tr>
	<th align="right">Requestor Signature : </th><th align="left"><input type='text' name='rSignature' value='<?php echo $v16 ?>'></th>
	<th align="right">Date/Time : </th><th align="left"><input type='datetime-local' name='dTime' value='<?php echo $v17 ?>'></th>
</tr>
<tr>
	<th align="right">Assesment Details : </th>
	<th align="left">
	<textarea rows="4" cols="35" input type="text" name="aDetails"><?php echo $v18 ?></textarea>
	</th>
</tr>
<tr>
	<th align="right">Assessment Maint Status : </th><th align="left"><input type='text' name='amStatus' value='<?php echo $v19 ?>'></th>
	<th align="right">Loaner Provided : </th><th align="left"><input type='text' name='lProvided' value='<?php echo $v20 ?>'></th>
</tr>
<tr>
	<th>Loaner Info</th>
	<th align="right">Asset Info - </th><th align="left"><input type='text' name='aInfo' value='<?php echo $v21 ?>'></th>
</tr>
<tr>
	<th></th>
	<th align="right">Loaner Start Date/Time : </th><th><input type='datetime-local' name='lStartDateTime' value='<?php echo $v22 ?>'></th>
	<th align="right">Loaner End Date/Time : </th><th><input type='datetime-local' name='lEndDateTime' value='<?php echo $v23 ?>'></th>
</tr>
<tr>
	<th></th>
	<th align="right">Loaner Received By : </th><th><input type='text' name='lReceivedBy' value='<?php echo $v24 ?>'></th>
	<th align="right">Loaner Return By : </th><th><input type='text' name='lReturnBy' value='<?php echo $v25 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>C. <u>Part Details</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Description</th>
	<th>UoM</th>
	<th>Qty used(U)/Returned(Rt)</th>
</tr>
<tr>
	<th class="thin">
	<textarea rows="2" cols="30" input type="text" name="d1"><?php echo $v26 ?></textarea>
	</th>
	<th class="thin"><input class="noborder" type='text' name='u1' value='<?php echo $v27 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='q1' value='<?php echo $v28 ?>'></th>
</tr>
<tr>
	<th class="thin">
	<textarea rows="2" cols="30" input type="text" name="d2"><?php echo $v29 ?></textarea>
	</th>
	<th class="thin"><input class="noborder" type='text' name='u2' value='<?php echo $v30 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='q2' value='<?php echo $v31 ?>'></th>
</tr>
<tr>
	<th class="thin">
	<textarea rows="2" cols="30" input type="text" name="d3"><?php echo $v32 ?></textarea>
	</th>
	<th class="thin"><input class="noborder" type='text' name='u3' value='<?php echo $v33 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='q3' value='<?php echo $v34 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>D. <u>Employee</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Employee No</th>
	<th>Employee Name</th>
	<th>Task Code</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Repair Hours</th>
</tr>
<tr class="thin">
	<th class="thin"><input class="noborder" type='text' name='eNo1' value='<?php echo $v35 ?>'></th>
	<th class="thin"><input size="35" class="noborder" type='text' name='eN1'  value='<?php echo $v36 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='tC1' value='<?php echo $v37 ?>'></th>
	<th class="thin"><input class="noborder" type='date' name='date1' value='<?php echo $v38 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='sTime1' value='<?php echo $v39 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='eTime1' value='<?php echo $v40 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='rHour1' value='<?php echo $v41 ?>'></th>
</tr>
<tr class="thin">
	<th class="thin"><input class="noborder" type='text' name='eNo2' value='<?php echo $v42 ?>'></th>
	<th class="thin"><input size="35" class="noborder" type='text' name='eN2' value='<?php echo $v43 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='tC2' value='<?php echo $v44 ?>'></th>
	<th class="thin"><input class="noborder" type='date' name='date2' value='<?php echo $v45 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='sTime2' value='<?php echo $v46 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='eTime2' value='<?php echo $v47 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='rHour2' value='<?php echo $v48 ?>'></th>
</tr>
<tr>
	<th class="thin"><input class="noborder" type='text' name='eNo3' value='<?php echo $v49 ?>'></th>
	<th class="thin"><input size="35" class="noborder" type='text' name='eN3' value='<?php echo $v50 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='tC3' value='<?php echo $v51 ?>'></th>
	<th class="thin"><input class="noborder" type='date' name='date3' value='<?php echo $v52 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='sTime3' value='<?php echo $v53 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='eTime3' value='<?php echo $v54 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='rHour3' value='<?php echo $v55 ?>'></th>
</tr>
<tr class="thin">
	<th class="thin"><input class="noborder" type='text' name='eNo4' value='<?php echo $v56 ?>'></th>
	<th class="thin"><input size="35" class="noborder" type='text' name='eN4' value='<?php echo $v57 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='tC4' value='<?php echo $v58 ?>'></th>
	<th class="thin"><input class="noborder" type='date' name='date4' value='<?php echo $v59 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='sTime4' value='<?php echo $v60 ?>'></th>
	<th class="thin"><input class="noborder" type='time' name='eTime4' value='<?php echo $v61 ?>'></th>
	<th class="thin"><input class="noborder" type='text' name='rHour4' value='<?php echo $v62 ?>'></th>
</tr>
<tr><th></th></tr>
<tr><th><b>E. <u>Completion</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">Date/Time Work Started : </th><th align="left"><input type='datetime-local' name='dtwS' value='<?php echo $v63 ?>'></th>
	<th align="right">Date/Time Work Completed : </th><th align="left"><input type='datetime-local' name='dtwC' value='<?php echo $v64 ?>'></th>
</tr>
<tr>
	<th align="right">Action Taken </th>
	<th align="left">
	<textarea rows="4" cols="35" input type="text" name="aTaken"><?php echo $v65 ?></textarea>
	<!--<input type='text' name='aTaken' value='<?php //echo $v65 ?>'> -->
	</th>
</tr>
<tr>
	<th align="right">Electrical Safety Test </th><th align="left"><input type='text' name='esTest' value='<?php echo $v66 ?>'></th>
	<th align="right">Performance Test </th><th align="left"><input type='text' name='pTest' value='<?php echo $v67 ?>'></th>
</tr>
<tr>
	<th align="right">QC PPM </th><th align="left"><input type='text' name='qcppm' value='<?php echo $v68 ?>'></th>
	<th align="right">QC Uptime </th><th align="left"><input type='text' name='qcuptime' value='<?php echo $v69 ?>'></th>
</tr>
<tr><th></th></tr>
<tr>
	<th colspan='4'>Completed By (SSB) </th>
	<th colspan='4'>Verified By (MoH) </th>
</tr>
<tr><th></th></tr>
<tr>
	<th align="right">Name: </th><th align="left"><input type='text' name='nameCompleted' value='<?php echo $v70 ?>'></th>
	<th align="right">Signature: </th><th align="left"><input type='text' name='sCompleted' value='<?php echo $v71 ?>'></th>

	<th align="right">Name: </th><th align="left"><input type='text' name='nameVerified' value='<?php echo $v72 ?>'></th>
	<th align="right">Signature: </th><th align="left"><input type='text' name='sVerified' value='<?php echo $v73 ?>'></th>
</tr>
<tr>
	<th></th><br><th></th>
	<th></th><br><th></th>
	<th align="right">Designation: </th><th align="left"><input type='text' name='dVerified' value='<?php echo $x5 ?>'></th>	
</tr>

<tr>
	<th align="right">Date: </th><th align="left"><input type='date' name='dateCompleted' value='<?php echo $v74 ?>'></th>
	<th align="right">Time: </th><th align="left"><input type='time' name='timeCompleted' value='<?php echo $v75 ?>'></th>

	<th align="right">Date: </th><th align="left"><input type='date' name='dateVerified' value='<?php echo $v76 ?>'></th>
	<th align="right">Time: </th><th align="left"><input type='time' name='timeVerified' value='<?php echo $v77 ?>'></th>
</tr>

</table>
<br>
<center>
<input type="submit" name="update" value="Update"> &nbsp&nbsp
<button type="button" onclick="window.location='showAll_wRequest.php'">Cancel</button>
</center>
</form>

</body>
</html> 