 <!DOCTYPE html>


<html>
<head>
<title>Work Request</title>
<link rel="stylesheet" href="css/mystyle.css"  type="text/css">
</head>
<body>

<center><h1>Work Request (FEMS)</h1></center>

<form action="php/insert_workRequest.php" method="post">
<table>
<tr>
	<th></th><th></th>
	<th></th><th></th>
	<th align="right">Status :</th>
	<th align="left">  
	<select name="status">
    <option value="Open">Open</option>
    <option value="Pending">Pending</option>
    <option value="Closed">Closed</option>
  	</select> 
  	</th>
</tr>
<tr>
	<th></th><th></th>
	<th></th><th></th>
	<th align="right">Request Date/Time :</th><th align="left"><input type="datetime-local" name="reqDateTime" required> </th>
</tr>
<tr>
	<th align="right">Hospital:</th><th align="left"><input type="text" name="hospitalName"></th>
	<th></th><th></th>
	<th align="right">WR NO :</th><th align="left"><input type="text" name="wrNo" required> </th>
</tr>
<tr><th><b>A. <u>Work Request</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">Requested by :</th><th align="left"><input type="text" name="RequestedBy"></th>
	<th align="right">Job Title :</th><th align="left"><input type="text" name="JobTitle"> </th>
	<th align="right">Ref :</th><th align="left"><input type="text" name="Ref"> </th>
</tr>
<tr>
	<th align="right">Contact No :</th><th align="left"><input type="text" name="ContactNo"></th>
	<th align="right">Dept :</th><th align="left"><input type="text" name="Dept"></th>
</tr>
<tr>
	<th align="right">AssetNo : </th><th align="left"><input type="text" name="AssetNo"></th>
	<th align="right">Asset name : </th>
	<th align="left">
	<textarea rows="2" cols="30" input type="text" name="AssetName"></textarea>
	</th>
</tr>
<tr>
	<th align="right">Location Code :</th><th align="left"> <input type="text" name="LocationCode"></th>
	<th align="right">Location Name :</th><th align="left"> <input type="text" name="LocationName"></th>
</tr>
<tr>
	<th align="right">Work Group : </th><th align="left"><input type="text" name="WorkGroup"></th>
	<th align="right">Variation Status : </th><th align="left"><input type="text" name="VariationStatus"></th>
</tr>
<tr>
	<th align="right">Work Category : </th><th align="left"><input type="text" name="WorkCategory"></th>
	<th align="right">Condition Status : </th><th align="left"><input type="text" name="ConditionStatus"></th>
</tr>
<tr>
	<th align="right">Requested Details : </th>
	<th>
	<textarea rows="4" cols="35" input type="text" name="RequestedDetails"></textarea>
	</th>
</tr>
<tr><th></th></tr>
<tr><th><b>B. <u>Assessment </b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">ID/Name : </th><th align="left"><input type="text" name="IDName"></th>
	<th align="right">Target Date : </th><th align="left"><input type="date" name="TargetDate"></th>
</tr>
<tr>
	<th align="right">Requestor Signature : </th><th align="left"><input type="text" name="rSignature"></th>
	<th align="right">Date/Time : </th><th align="left"><input type="datetime-local" name="dTime"></th>
</tr>
<tr>
	<th align="right">Assessment Details : </th>
	<th align="left">
	<textarea rows="4" cols="35" input type="text" name="aDetails"></textarea>
	</th>
</tr>
<tr>
	<th align="right"> Assessment Maint Status : </th><th align="left"><input type="text" name="amStatus"></th>
	<th align="right">Loaner Provided : </th><th align="left"><input type="text" name="lProvided"></th>
</tr>
<tr>
	<th align="right">Loaner Info</th>
	<th align="right">Asset Info - </th><th align="left"><input type="text" name="aInfo"></th>
</tr>
<tr>
	<th></th>
	<th align="right">Loaner Start Date/Time : </th><th align="left"><input type="datetime-local" name="lStartDateTime"></th>
	<th align="right">Loaner End Date/Time : </th><th align="left"><input type="datetime-local" name="lEndDateTime"></th>
</tr>
<tr>
	<th></th>
	<th align="right">Loaner Received By : </th><th align="left"><input type="text" name="lReceivedBy"></th>
	<th align="right">Loaner Return By : </th><th align="left"><input type="text" name="lReturnBy"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>C. <u>Part Details</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th>Description</th>
	<th>UoM</th>
	<th>Qty used(U)/Returned(Rt)</th>
</tr>
<tr class="thin">
	<th class="thin">
	<textarea class="removeborder" rows="2" cols="30" input type="text" name="d1"></textarea>
	</th>
	<th class="thin"><input type="text" name="u1" class="noborder"></th>
	<th class="thin"><input type="text" name="q1" class="noborder"></th>
</tr>
<tr>
	<th class="thin">
	<textarea class="removeborder" rows="2" cols="30" input type="text" name="d2"></textarea>
	</th>
	<th class="thin"><input type="text" name="u2" class="noborder"></th>
	<th class="thin"><input type="text" name="q2" class="noborder"></th>
</tr>
<tr>
	<th class="thin">
	<textarea class="removeborder" rows="2" cols="30" input type="text" name="d3"></textarea>
	</th>
	<th class="thin"><input type="text" name="u3" class="noborder"></th>
	<th class="thin"><input type="text" name="q3" class="noborder"></th>
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
<tr>
	<th class="thin"><input type="text" name="eNo1" class="noborder"></th>
	<th class="thin"><input type="text" name="eN1" class="noborder"></th>
	<th class="thin"><input type="text" name="tC1" class="noborder"></th>
	<th class="thin"><input type="date" name="date1" class="noborder"></th>
	<th class="thin"><input type="time" name="sTime1" class="noborder"></th>
	<th class="thin"><input type="time" name="eTime1" class="noborder"></th>
	<th class="thin"><input type="text" name="rHour1" class="noborder"></th>
</tr>
<tr>
	<th class="thin"><input type="text" name="eNo2" class="noborder"></th>
	<th class="thin"><input type="text" name="eN2" class="noborder"></th>
	<th class="thin"><input type="text" name="tC2" class="noborder"></th>
	<th class="thin"><input type="date" name="date2" class="noborder"></th>
	<th class="thin"><input type="time" name="sTime2" class="noborder"></th>
	<th class="thin"><input type="time" name="eTime2" class="noborder"></th>
	<th class="thin"><input type="text" name="rHour2" class="noborder"></th>
</tr>
<tr>
	<th class="thin"><input type="text" name="eNo3" class="noborder"></th>
	<th class="thin"><input type="text" name="eN3" class="noborder"></th>
	<th class="thin"><input type="text" name="tC3" class="noborder"></th>
	<th class="thin"><input type="date" name="date3" class="noborder"></th>
	<th class="thin"><input type="time" name="sTime3" class="noborder"></th>
	<th class="thin"><input type="time" name="eTime3" class="noborder"></th>
	<th class="thin"><input type="text" name="rHour3" class="noborder"></th>
</tr>
<tr>
	<th class="thin"><input type="text" name="eNo4" class="noborder"></th>
	<th class="thin"><input type="text" name="eN4" class="noborder"></th>
	<th class="thin"><input type="text" name="tC4" class="noborder"></th>
	<th class="thin"><input type="date" name="date4" class="noborder"></th>
	<th class="thin"><input type="time" name="sTime4" class="noborder"></th>
	<th class="thin"><input type="time" name="eTime4" class="noborder"></th>
	<th class="thin"><input type="text" name="rHour4" class="noborder"></th>
</tr>
<tr><th></th></tr>
<tr><th><b>E. <u>Completion</b></u></th></tr>
<tr><th></th></tr>
<tr>
	<th align="right">Date/Time Work Started: </th><th align="left"><input type="datetime-local" name="dtwS"></th>
	<th align="right">Date/Time Work Completed: </th><th align="left"><input type="datetime-local" name="dtwC"></th>
</tr>
<tr>
	<th colspan>Action Taken </th><th align="left"><textarea rows="4" cols="35" input type="text" name="aTaken"></textarea>
	</th>
</tr>
<tr>
	<th align="right">Electrical Safety Test </th><th align="left"><input type="text" name="esTest"></th>
	<th align="right">Performance Test </th><th align="left"><input type="text" name="pTest"></th>
</tr>
<tr>
	<th align="right">QC PPM </th><th align="left"><input type="text" name="qcppm"></th>
	<th align="right">QC Uptime </th><th align="left"><input type="text" name="qcuptime"></th>
</tr>
<tr><th></th></tr>
<tr>
	<th colspan="4">Completed By (SSB) </th>
	<th colspan="4">Verified By (MoH) </th>
</tr>
<tr><th></th></tr>
<tr>
	<th align="right">Name: </th><th align="left"><input type="text" name="nameCompleted"></th>
	<th align="right">Signature: </th><th align="left"><input type="text" name="sCompleted"></th>

	<th align="right">Name: </th><th align="left"><input type="text" name="nameVerified"></th>
	<th align="right">Signature: </th><th align="left"><input type="text" name="sVerified"></th>
</tr>
<tr>
	<th></th><br><th></th>
	<th></th><br><th></th>
	<th align="right">Designation: </th><th align="left"><input type="text" name="dVerified"></th>	
</tr>

<tr>
	<th align="right">Date: </th><th align="left"><input type="date" name="dateCompleted"></th>
	<th align="right">Time: </th><th align="left"><input type="time" name="timeCompleted"></th>

	<th align="right">Date: </th><th align="left"><input type="date" name="dateVerified"></th>
	<th align="right">Time: </th><th align="left"><input type="time" name="timeVerified"></th>
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