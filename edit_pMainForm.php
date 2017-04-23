 <?php include('php/view_pMainForm.php');?>

<!DOCTYPE html>


<html>
<head>
<title>Preventive Maintenance</title>
</head>
<body>
<center>
<table>	
<tr>
	<th></th>
	<th><h1>HOSPITAL SUPPORT SERVICE</h1></th>
</tr>
<tr>
	<th></th>
	<th><h2>PREVENTIVE MAINTENANCE WORK</h2></th>
</tr>
</center>
</table>



<form action="php/update_pMain.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<table>
<tr>

	<th align="right" colspan="6">Status :</th>
	<th align="left">  
	<select name="status">
    <option value="Open" <?php echo $selected1 ?> >Open</option>
    <option value="Pending" <?php echo $selected2 ?> >Pending</option>
    <option value="Closed" <?php echo $selected3 ?> >Closed</option>
  	</select> 
</tr>
<tr>
	<th align="right">Hospital:</th><th align="left"><input type="text" name="hospital" value='<?php echo $x1 ?>'></th>
	<th align="right"></th><th></th>
</tr>
<tr>
	<th align="right"><br>Work No:</th><th><br><input type="text" name="workNo" value='<?php echo $v2 ?>' required></th>
	<th align="right"><br>Date/Time:</th><th><br><input type="datetime-local" name="dateTime1" value='<?php echo $dateView ?>'></th>
</tr>
<tr>
	<th align="right">Work Group:</th><th><input type="text" name="workGroup" value='<?php echo $v4 ?>'></th>
	<th align="right">WR Type:</th><th><input type="text" name="wrType" value='<?php echo $v5 ?>'></th>
</tr>
<tr>
	<th align="right">Period:</th><th><input type="text" name="period" value='<?php echo $v6 ?>'></th>
</tr>
<tr>
	<th colspan="2"><br>QC-PPM/RT</th>
	<th colspan="2"><br>QC-Uptime</th>
</tr>
<tr>
	<th align="right"><br>Asset No:</th><th><br><input type="text" name="assetNo" value='<?php echo $v7 ?>'></th>
	<th align="right"><br>Type Code:</th><th><br><input type="text" name="typeCode" value='<?php echo $v8 ?>'></th>
</tr>
<tr>
	<th align="right">Asset Name:</th><th><input type="text" name="assetName" value='<?php echo $v9 ?>'></th>
	<th align="right">Location Name:</th><th><input type="text" name="locationName" value='<?php echo $v10 ?>'></th>
</tr>
<tr>
	<th align="right">Location Code:</th><th><input type="text" name="locationCode" value='<?php echo $v11 ?>'></th>
	<th align="right">Department Name:</th><th><input type="text" name="departmentName" value='<?php echo $v12 ?>'></th>
</tr>
<tr>
	<th align="right">Asset status:</th><th><input type="text" name="assetStatus" value='<?php echo $v13 ?>'></th>
	<th align="right">Asset Critically:</th><th><input type="text" name="assetCritically" value='<?php echo $v14 ?>'></th>
</tr>
<tr>
	<th align="right">Variation status:</th><th><input type="text" name="variationStatus" value='<?php echo $v15 ?>'></th>
	<th align="right">Asset Condition:</th><th><input type="text" name="assetCondition" value='<?php echo $v16 ?>'></th>
</tr>
<tr>
	<th align="right">Brand/Model:</th><th><input type="text" name="brandModel" value='<?php echo $v17 ?>'></th>
	<th align="right">Serial No:</th><th><input type="text" name="serialNo" value='<?php echo $v18 ?>'></th>
</tr>
<tr>
	<th align="right">Manufacturer Brand:</th><th><input type="text" name="manufacturer" value='<?php echo $v19 ?>'></th>
	<th align="right">Vendor:</th><th><input type="text" name="vendor" value='<?php echo $v20 ?>'></th>
</tr>
<tr>
	<th align="right">Service Agent:</th><th><input type="text" name="serviceAgent" value='<?php echo $v21 ?>'></th>
	<th align="right">Service Life(Yrs):</th><th><input type="text" name="serviceLife" value='<?php echo $v22 ?>'></th>
</tr>
<tr>
	<th align="right">Contact Person:</th><th><input type="text" name="contactPerson" value='<?php echo $v23 ?>'></th>
	<th align="right">Phone No:</th><th><input type="text" name="phoneNo" value='<?php echo $v24 ?>'></th>
</tr>
<tr>
	<th align="right">Previous Work Date:</th><th><input type="date" name="pWorkDate" value='<?php echo $v25 ?>'></th>
	<th align="right">Previous Repair Date:</th><th><input type="date" name="pRepairDate" value='<?php echo $v26 ?>'></th>
</tr>
<tr>
	<th>Task No</th>
	<th>Description</th>
	<th>Target Date</th>
	<th>Next</th>
	<th>Status</th>
</tr>
<tr>
	<th><input type="text" name="taskNo" value='<?php echo $v27 ?>'></th>
	<th><input type="text" name="description" value='<?php echo $v28 ?>'></th>
	<th><input type="date" name="targetDate" value='<?php echo $v29 ?>'></th>
	<th><input type="text" name="next" value='<?php echo $v30 ?>'></th>
	<th><input type="text" name="statusTask" value='<?php echo $v31 ?>'></th>
</tr>
<tr>
	<th align="right"><br>Requested Details:</th><th><br><input type="text" name="requestedDetails" value='<?php echo $v32 ?>'></th>
</tr>
<tr>
	<th><br>Preventive Work Request</th>
</tr>
<tr>
	<th align="right">Contract/Warranty Information:</th><th><input type="text" name="cWarrantyInformation" value='<?php echo $v33 ?>'></th>
</tr>
<tr>
	<th align="right">Contractor/Company Name:</th><th><input type="text" name="cCompanyName" value='<?php echo $v34 ?>'></th>
</tr>
<tr>
	<th align="right">Contract/Warranty Start Date:</th><th><input type="date" name="cwStartDate" value='<?php echo $v35 ?>'></th>
	<th align="right">End Date:</th><th><input type="date" name="cwEndDate" value='<?php echo $v36 ?>'></th>
</tr>
<tr>
	<th align="right">Telephone No:</th><th><input type="text" name="telNo" value='<?php echo $v37 ?>'></th>
</tr>
<tr>
	<th><br>Part Details</th>
</tr>
<tr>
	<th>Description</th>
	<th>UOM</th>
	<th>Qty Used(U)/Returned(Rt)</th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc1" value='<?php echo $v38 ?>'></th>
	<th><input type="text" name="uom1" value='<?php echo $v39 ?>'></th>
	<th><input type="text" name="qUsedReturned1" value='<?php echo $v40 ?>'></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc2" value='<?php echo $v41 ?>'></th>
	<th><input type="text" name="uom2" value='<?php echo $v42 ?>'></th>
	<th><input type="text" name="qUsedReturned2" value='<?php echo $v43 ?>'></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc3" value='<?php echo $v44 ?>'></th>
	<th><input type="text" name="uom3" value='<?php echo $v45 ?>'></th>
	<th><input type="text" name="qUsedReturned3" value='<?php echo $v46 ?>'></th>
</tr>
<tr>
	<th><br>Employee Details</th>
</tr>
<tr>
	<th>Employee No.</th>
	<th>Name</th>
	<th>Task Code</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End Time</th>
	<th>Preparation Hours</th>
</tr>
<tr>
	<th><input type="text" name="employeeNo1" value='<?php echo $v47 ?>'></th>
	<th><input type="text" name="nameEmployee1" value='<?php echo $v48 ?>'></th>
	<th><input type="text" name="taskCode1" value='<?php echo $v49 ?>'></th>
	<th><input type="date" name="dateEmDetails1" value='<?php echo $v50 ?>'></th>
	<th><input type="time" name="startTime1" value='<?php echo $v51 ?>'></th>
	<th><input type="time" name="endTime1" value='<?php echo $v52 ?>'></th>
	<th><input type="text" name="prepHours1" value='<?php echo $v53 ?>'></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo2" value='<?php echo $v54 ?>'></th>
	<th><input type="text" name="nameEmployee2" value='<?php echo $v55 ?>'></th>
	<th><input type="text" name="taskCode2" value='<?php echo $v56 ?>'></th>
	<th><input type="date" name="dateEmDetails2" value='<?php echo $v57 ?>'></th>
	<th><input type="time" name="startTime2" value='<?php echo $v58 ?>'></th>
	<th><input type="time" name="endTime2" value='<?php echo $v59 ?>'></th>
	<th><input type="text" name="prepHours2" value='<?php echo $v60 ?>'></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo3" value='<?php echo $v61 ?>'></th>
	<th><input type="text" name="nameEmployee3" value='<?php echo $v62 ?>'></th>
	<th><input type="text" name="taskCode3" value='<?php echo $v63 ?>'></th>
	<th><input type="date" name="dateEmDetails3" value='<?php echo $v64 ?>'></th>
	<th><input type="time" name="startTime3" value='<?php echo $v65 ?>'></th>
	<th><input type="time" name="endTime3" value='<?php echo $v66 ?>'></th>
	<th><input type="text" name="prepHours3" value='<?php echo $v67 ?>'></th>
</tr>
<tr>
	<th><br>Completion</th>
</tr>
<tr>
	<th align="right"><br>Performance Test:</th><th><br><input type="text" name="performanceTest" value='<?php echo $v68 ?>'></th>
	<th align="right"><br>Electrical Safety Test:</th><th><br><input type="text" name="eSafetyTest" value='<?php echo $v69 ?>'></th>
</tr>
<tr>
	<th align="right">PPM Agreed Date:</th><th><input type="date" name="ppmAgreedDate" value='<?php echo $v70 ?>'></th>
</tr>
<tr>
	<th align="right">Date/Time Work Started:</th><th><input type="datetime-local" name="dateTimeStarted" value='<?php echo $v71 ?>'></th>
	<th align="right">Date/Time Work Completed:</th><th><input type="datetime-local" name="dateTimeCompleted" value='<?php echo $v72 ?>'></th>
	<th align="right">Downtime Hours:</th><th><input type="text" name="downtimeHours" value='<?php echo $v73 ?>'></th>
</tr>
<tr>
	<th align="right">Action Taken:</th><th><input type="text" name="actionTaken" value='<?php echo $v74 ?>'></th>
</tr>
<tr>
	<th align="right">Completed by:</th><th><input type="text" name="completedBy" value='<?php echo $v75 ?>'></th>
	<th align="right">Date:</th><th><input type="date" name="dateCompleted" value='<?php echo $v76 ?>'></th>
	<th align="right">Verified by:</th><th><input type="text" name="verifiedBy" value='<?php echo $v77 ?>'></th>
	<th align="right">Date:</th><th><input type="date" name="dateVerified" value='<?php echo $v78 ?>'></th>
</tr>
<tr>
	<th></th><th></th>
	<th align="right">Time:</th><th><input type="time" name="timeCompleted" value='<?php echo $v79 ?>'></th>
	<th></th><th></th>
	<th align="right">Time:</th><th><input type="time" name="timeVerified" value='<?php echo $v80 ?>'></th>
</tr>

</table>
<br>
<center>
<input type="submit" name="update" value="Update"> &nbsp&nbsp
<button type="button" onclick="window.location='showAll_pMaintenance.php'">Cancel</button>
</center>
</form>

</body>
</html> 