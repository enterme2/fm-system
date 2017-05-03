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



<form action="php/insert_pMaintenance.php" method="post">

<table>
<tr>

	<th align="right" colspan="6">Status :</th>
	<th align="left">  
	<select name="status">
    <option value="Open">Open</option>
    <option value="Pending">Pending</option>
    <option value="Closed">Closed</option>
  	</select> 
</tr>
<tr>
	<th align="right">Hospital:</th align="left"><th align="left"><input type="text" name="hospital"></th>
	<th align="right"></th><th></th>
</tr>
<tr>
	<th align="right"><br>Work No:</th><th align="left"><br><input type="text" name="workNo" required></th>
	<th align="right"><br>Date/Time:</th><th align="left"><br><input type="datetime-local" name="dateTime1"></th>
</tr>
<tr>
	<th align="right">Work Group:</th><th align="left"><input type="text" name="workGroup"></th>
	<th align="right">WR Type:</th><th align="left"><input type="text" name="wrType"></th>
</tr>
<tr>
	<th align="right">Period:</th><th align="left"><input type="text" name="period"></th>
</tr>
<tr>
	<th colspan="2"><br>QC-PPM/RT</th>
	<th colspan="2"><br>QC-Uptime</th>
</tr>
<tr>
	<th align="right"><br>Asset No:</th><th align="left"><br><input type="text" name="assetNo"></th>
	<th align="right"><br>Type Code:</th><th align="left"><br><input type="text" name="typeCode"></th>
</tr>
<tr>
	<th align="right">Asset Name:</th><th align="left"><input type="text" name="assetName"></th>
	<th align="right">Location Name:</th><th align="left"><input type="text" name="locationName"></th>
</tr>
<tr>
	<th align="right">Location Code:</th><th align="left"><input type="text" name="locationCode"></th>
	<th align="right">Department Name:</th><th align="left"><input type="text" name="departmentName"></th>
</tr>
<tr>
	<th align="right">Asset status:</th><th align="left"><input type="text" name="assetStatus"></th>
	<th align="right">Asset Critically:</th><th align="left"><input type="text" name="assetCritically"></th>
</tr>
<tr>
	<th align="right">Variation status:</th><th align="left"><input type="text" name="variationStatus"></th>
	<th align="right">Asset Condition:</th><th align="left"><input type="text" name="assetCondition"></th>
</tr>
<tr>
	<th align="right">Brand/Model:</th><th align="left"><input type="text" name="brandModel"></th>
	<th align="right">Serial No:</th><th align="left"><input type="text" name="serialNo"></th>
</tr>
<tr>
	<th align="right">Manufacturer Brand:</th><th align="left"><input type="text" name="manufacturer"></th>
	<th align="right">Vendor:</th><th align="left"><input type="text" name="vendor"></th>
</tr>
<tr>
	<th align="right">Service Agent:</th><th align="left"><input type="text" name="serviceAgent"></th>
	<th align="right">Service Life(Yrs):</th><th align="left"><input type="text" name="serviceLife"></th>
</tr>
<tr>
	<th align="right">Contact Person:</th><th align="left"><input type="text" name="contactPerson"></th>
	<th align="right">Phone No:</th><th align="left"><input type="text" name="phoneNo"></th>
</tr>
<tr>
	<th align="right">Previous Work Date:</th><th align="left"><input type="date" name="pWorkDate"></th>
	<th align="right">Previous Repair Date:</th><th align="left"><input type="date" name="pRepairDate"></th>
</tr>
<tr>
	<th>Task No</th>
	<th>Description</th>
	<th>Target Date</th>
	<th>Next</th>
	<th>Status</th>
</tr>
<tr>
	<th><input type="text" name="taskNo"></th>
	<th><input type="text" name="description"></th>
	<th><input type="date" name="targetDate"></th>
	<th><input type="text" name="next"></th>
	<th><input type="text" name="statusTask"></th>
</tr>
<tr>
	<th align="right"><br>Requested Details:</th><th align="left"><br><input type="text" name="requestedDetails"></th>
</tr>
<tr>
	<th><br>Preventive Work Request</th>
</tr>
<tr>
	<th align="right">Contract/Warranty Information:</th><th align="left"><input type="text" name="cWarrantyInformation"></th>
</tr>
<tr>
	<th align="right">Contractor/Company Name:</th><th align="left"><input type="text" name="cCompanyName"></th>
</tr>
<tr>
	<th align="right">Contract/Warranty Start Date:</th><th align="left"><input type="date" name="cwStartDate"></th>
	<th align="right">End Date:</th><th align="left"><input type="date" name="cwEndDate"></th>
</tr>
<tr>
	<th align="right">Telephone No:</th><th align="left"><input type="text" name="telNo"></th>
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
	<th><input type="text" name="pdetailsDesc1"></th>
	<th><input type="text" name="uom1"></th>
	<th><input type="text" name="qUsedReturned1"></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc2"></th>
	<th><input type="text" name="uom2"></th>
	<th><input type="text" name="qUsedReturned2"></th>
</tr>
<tr>
	<th><input type="text" name="pdetailsDesc3"></th>
	<th><input type="text" name="uom3"></th>
	<th><input type="text" name="qUsedReturned3"></th>
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
	<th><input type="text" name="employeeNo1"></th>
	<th><input type="text" name="nameEmployee1"></th>
	<th><input type="text" name="taskCode1"></th>
	<th><input type="date" name="dateEmDetails1"></th>
	<th><input type="time" name="startTime1"></th>
	<th><input type="time" name="endTime1"></th>
	<th><input type="text" name="prepHours1"></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo2"></th>
	<th><input type="text" name="nameEmployee2"></th>
	<th><input type="text" name="taskCode2"></th>
	<th><input type="date" name="dateEmDetails2"></th>
	<th><input type="time" name="startTime2"></th>
	<th><input type="time" name="endTime2"></th>
	<th><input type="text" name="prepHours2"></th>
</tr>
<tr>
	<th><input type="text" name="employeeNo3"></th>
	<th><input type="text" name="nameEmployee3"></th>
	<th><input type="text" name="taskCode3"></th>
	<th><input type="date" name="dateEmDetails3"></th>
	<th><input type="time" name="startTime3"></th>
	<th><input type="time" name="endTime3"></th>
	<th><input type="text" name="prepHours3"></th>
</tr>
<tr>
	<th><br>Completion</th>
</tr>
<tr>
	<th align="right"><br>Performance Test:</th><th align="left"><br><input type="text" name="performanceTest"></th>
	<th align="right"><br>Electrical Safety Test:</th><th align="left"><br><input type="text" name="eSafetyTest"></th>
</tr>
<tr>
	<th align="right">PPM Agreed Date:</th><th align="left"><input type="date" name="ppmAgreedDate"></th>
</tr>
<tr>
	<th align="right">Date/Time Work Started:</th><th align="left"><input type="datetime-local" name="dateTimeStarted"></th>
	<th align="right">Date/Time Work Completed:</th><th align="left"><input type="datetime-local" name="dateTimeCompleted"></th>
	<th align="right">Downtime Hours:</th><th align="left"><input type="text" name="downtimeHours"></th>
</tr>
<tr>
	<th align="right">Action Taken:</th><th align="left"><input type="text" name="actionTaken"></th>
</tr>
<tr>
	<th align="right">Completed by:</th><th align="left"> <input type="text" name="completedBy"></th>
	<th align="right">Date:</th><th align="left"><input type="date" name="dateCompleted"></th>
	<th align="right">Verified by:</th><th align="left"><input type="text" name="verifiedBy"></th>
	<th align="right">Date:</th><th align="left"><input type="date" name="dateVerified"></th>
</tr>
<tr>
	<th></th><th></th>
	<th align="right">Time:</th><th align="left"><input type="time" name="timeCompleted"></th>
	<th></th><th></th>
	<th align="right">Time:</th><th align="left"><input type="time" name="timeVerified"></th>
</tr>

</table>
<br>
<center>
<input type="reset" name="reset" value="Reset"> &nbsp&nbsp
<input type="submit" name="Add" value="Save"> &nbsp&nbsp
<button type="button" onclick="window.location='profile.php'">Cancel</button>
</center>
</form>

</body>
</html> 