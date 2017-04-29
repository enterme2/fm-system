<!DOCTYPE html>
<html>
<head>
<title>Work Request</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue.css">
<link rel="stylesheet" href="css/font-awesome.css">

</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">AWS</a>
    <a href="#" class="w3-bar-item w3-button w3-hover-white w3-mobile w3-hide-small">Home</a>
    <a href="php/logout.php" class="w3-bar-item w3-button w3-hover-white w3-right w3-theme-l1">Logout</a>
  </div>

</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Work Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="wReqForm.php">Add Work Request</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="showAll_wRequest.php?page=1">Show Work Request</a>
    </div>
  </div> 

    <div class="w3-dropdown-hover">
    <button class="w3-button">Preventive <br>Maintenance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="pMainForm.php">Add Preventive Maintenance Work</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="showAll_pMaintenance.php">Show Preventive Maintenance Work</a>
    </div>
  </div> 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-cell-row " style="padding-top: 64px;">
    <div class="w3-cell w3-container">
    <h2 class="w3-text-teal w3-center">Work Request (FEMS)</h2>
    </div>
  </div>

  <form action="php/insert_workRequest.php" method="post">
  <div class="w3-row w3-container">
    <div class="w3-col m10 w3-padding-small">
    <wbr>   
    </div>
    <div class="w3-col m2 w3-padding-small">
      <label> Status :</label>
      <select class="w3-select w3-border" name="status">
      <option value="Open">Open</option>
      <option value="Pending">Pending</option>
      <option value="Closed">Closed</option>
    </select> 
    </div>
  </div>
  <div class="w3-row w3-container">
    <div class="w3-col m9 w3-padding-small">
    <wbr>   
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Request Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="reqDateTime" required>
    </div>
  </div>


  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small">
      <label>Hospital:</label>
      <input class="w3-input w3-border" type="text" name="hospitalName">
    </div>
    <div class="w3-col m7 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>WR NO :</label>
    <input class="w3-input w3-border" type="text" name="wrNo" required>
    </div>
  </div>

  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">A. Work Request
    <a id="iconA" onclick="toggle('contentA', 'iconA');"><i class="fa fa-minus-circle aria-hidden='true'"></i></a>
    <a id="iconAll" onclick="toggleAll('contentA','contentB','contentC','contentD','contentE','iconAll','iconA','iconB','iconC','iconD','iconE');">
    <i class="fa fa-eye-slash aria-hidden='true'"></i></a>
    </h3>
    </div>
  </div>

  <div class="w3-container" id="contentA" style="display: block;">
    <div class="w3-card-4">
    <div class="w3-padding-16"></div>
  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Requested by :</label>
      <input class="w3-input w3-border" type="text" name="RequestedBy">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Job Title :</label>
      <input class="w3-input w3-border" type="text" name="JobTitle">
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>Ref :</label>
    <input class="w3-input w3-border" type="text" name="Ref">
    </div>
  </div>
 

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Contact No :</label>
      <input class="w3-input w3-border" type="text" name="ContactNo">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Department :</label>
      <input class="w3-input w3-border" type="text" name="Dept">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>AssetNo :</label>
      <input class="w3-input w3-border" type="text" name="AssetNo">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Asset name :</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="AssetName"></textarea>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Location Code :</label>
      <input class="w3-input w3-border" type="text" name="LocationCode">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Location Name :</label>
      <input class="w3-input w3-border" type="text" name="LocationName">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Work Group :</label>
      <input class="w3-input w3-border" type="text" name="WorkGroup">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Variation Status :</label>
      <input class="w3-input w3-border" type="text" name="VariationStatus">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Work Category :</label>
      <input class="w3-input w3-border" type="text" name="WorkCategory">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Condition Status :</label>
      <input class="w3-input w3-border" type="text" name="ConditionStatus">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Requested Details :</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="RequestedDetails"></textarea>
    </div>
  </div>
  <div class="w3-padding-16"></div>
  </div>
  </div>


  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">B. Assessment
    <a id="iconB" onclick="toggle('contentB', 'iconB');"><i class="fa fa-plus-circle aria-hidden='true'"></i></a>
    </h3>
    </div>
  </div>
  <div class="w3-container" id="contentB" style="display: none;">
  <div class="w3-card-4">
    <div class="w3-padding-16"></div>
  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>ID/Name :</label>
      <input class="w3-input w3-border" type="text" name="IDName">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Target Date :</label>
      <input class="w3-input w3-border" type="date" name="TargetDate">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Requestor Signature :</label>
      <input class="w3-input w3-border" type="text" name="rSignature">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="dTime">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Assessment Details :</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="aDetails"></textarea>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Assessment Maint Status :</label>
      <input class="w3-input w3-border" type="text" name="amStatus">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Loaner Provided :</label>
      <input class="w3-input w3-border" type="text" name="lProvided">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Loaner Info -</label>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Asset Info  :</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="aInfo"></textarea>
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label>Loaner Start Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="lStartDateTime">
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label>Loaner End Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="lEndDateTime">
    </div>

  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label><wbr></label>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label><wbr></label>
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label>Loaner Received By :</label>
      <input class="w3-input w3-border" type="text" name="lReceivedBy">
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label>Loaner Return By :</label>
      <input class="w3-input w3-border" type="text" name="lReturnBy">
    </div>
  </div>
    <div class="w3-padding-16"></div>
  </div> 
</div>

  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">C. Part Details
    <a id="iconC" onclick="toggle('contentC', 'iconC');"><i class="fa fa-plus-circle aria-hidden='true'"></i></a>
    </h3>
    </div>
  </div>

  <div class="w3-container w3-responsive" id="contentC" style="display: none;">
  <table class="w3-table w3-bordered w3-card-4">
  <tr>
    <th>Description</th>
    <th>UoM</th>
    <th>Qty used(U)/Returned(Rt)</th>
  </tr>

  <tr class="w3-light-grey">
  <td>
  <textarea class="w3-input w3-border-0" style="resize: none;" input type="text" name="d1"></textarea>
  </td>
  <td><input type="text" name="u1" class="w3-input w3-border-0"></td>
  <td><input type="text" name="q1" class="w3-input w3-border-0"></td>
  </tr>

  <tr class="w3-light-grey">
  <td>
  <textarea class="w3-input w3-border-0" style="resize: none;" input type="text" name="d2"></textarea>
  </td>
  <td><input type="text" name="u2" class="w3-input w3-border-0"></td>
  <td><input type="text" name="q2" class="w3-input w3-border-0"></td>
  </tr>

  <tr class="w3-light-grey">
  <td>
  <textarea class="w3-input w3-border-0" style="resize: none;" input type="text" name="d3"></textarea>
  </td>
  <td><input type="text" name="u3" class="w3-input w3-border-0 "></td>
  <td><input type="text" name="q3" class="w3-input w3-border-0 "></td>
  </tr>

  </table>
  </div>

  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">D. Employee
    <a id="iconD" onclick="toggle('contentD', 'iconD');"><i class="fa fa-plus-circle aria-hidden='true'"></i></a>
    </h3>
    </div>
  </div>

<div class="w3-container w3-responsive" id="contentD" style="display: none;">
  <table class="w3-table w3-bordered w3-card-4">
  <tr>
    <th>Employee No</th>
    <th>Employee Name</th>
    <th>Task Code</th>
    <th>Date</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Repair Hours</th>
  </tr>

  <tr class="w3-light-grey">
  <td><input type="text" name="eNo1" class="w3-input w3-border-0"></td>
  <td><input type="text" name="eN1" class="w3-input w3-border-0"></td>
  <td><input type="text" name="tC1" class="w3-input w3-border-0"></td>
  <td><input type="date" name="date1" class="w3-input w3-border-0"></td>
  <td><input type="time" name="sTime1" class="w3-input w3-border-0"></td>
  <td><input type="time" name="eTime1" class="w3-input w3-border-0"></td>
  <td><input type="text" name="rHour1" class="w3-input w3-border-0"></td>
  </tr>

  <tr class="w3-light-grey">
  <td><input type="text" name="eNo2" class="w3-input w3-border-0"></td>
  <td><input type="text" name="eN2" class="w3-input w3-border-0"></td>
  <td><input type="text" name="tC2" class="w3-input w3-border-0"></td>
  <td><input type="date" name="date2" class="w3-input w3-border-0"></td>
  <td><input type="time" name="sTime2" class="w3-input w3-border-0"></td>
  <td><input type="time" name="eTime2" class="w3-input w3-border-0"></td>
  <td><input type="text" name="rHour2" class="w3-input w3-border-0"></td>
  </tr>

  <tr class="w3-light-grey">
  <td><input type="text" name="eNo3" class="w3-input w3-border-0"></td>
  <td><input type="text" name="eN3" class="w3-input w3-border-0"></td>
  <td><input type="text" name="tC3" class="w3-input w3-border-0"></td>
  <td><input type="date" name="date3" class="w3-input w3-border-0"></td>
  <td><input type="time" name="sTime3" class="w3-input w3-border-0"></td>
  <td><input type="time" name="eTime3" class="w3-input w3-border-0"></td>
  <td><input type="text" name="rHour3" class="w3-input w3-border-0"></td>
  </tr>

  <tr class="w3-light-grey">
  <td><input type="text" name="eNo4" class="w3-input w3-border-0"></td>
  <td><input type="text" name="eN4" class="w3-input w3-border-0"></td>
  <td><input type="text" name="tC4" class="w3-input w3-border-0"></td>
  <td><input type="date" name="date4" class="w3-input w3-border-0"></td>
  <td><input type="time" name="sTime4" class="w3-input w3-border-0"></td>
  <td><input type="time" name="eTime4" class="w3-input w3-border-0"></td>
  <td><input type="text" name="rHour4" class="w3-input w3-border-0"></td>
  </tr>

  </table>
  </div>

  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">E. Completion
    <a id="iconE" onclick="toggle('contentE', 'iconE');"><i class="fa fa-plus-circle aria-hidden='true'"></i></a>
    </h3>
    
    </div>
  </div>

<div class="w3-container" id="contentE" style="display: none;">
  <div class="w3-card-4">
    <div class="w3-padding-16"></div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Date/Time Work Started :</label>
      <input class="w3-input w3-border" type="datetime-local" name="dtwS">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Date/Time Work Completed :</label>
      <input class="w3-input w3-border" type="datetime-local" name="dtwC">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Action Taken :</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="aTaken"></textarea>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Electrical Safety Test :</label>
      <input class="w3-input w3-border" type="text" name="esTest">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Performance Test :</label>
      <input class="w3-input w3-border" type="text" name="pTest">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>QC PPM :</label>
      <input class="w3-input w3-border" type="text" name="qcppm">
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>QC Uptime :</label>
      <input class="w3-input w3-border" type="text" name="qcuptime">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
    <label>Completed By (SSB)</label>
    </div>
    <div class="w3-col m3 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Verified By (MoH)</label>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
    <label>Name :</label>
    <input class="w3-input w3-border" type="text" name="nameCompleted">
    </div>
    <div class="w3-col m3 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>Name :</label>
    <input class="w3-input w3-border" type="text" name="nameVerified">
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>Designation :</label>
    <input class="w3-input w3-border" type="text" name="dVerified">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
    <label>Signature :</label>
    <input class="w3-input w3-border" type="text" name="sCompleted">
    </div>
    <div class="w3-col m3 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>Signature :</label>
    <input class="w3-input w3-border" type="text" name="sVerified">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m4 w3-padding-small">
    <label>Date/Time :</label>
    <input class="w3-input w3-border" type="datetime-local" name="datetimeCompleted">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m4 w3-padding-small">
    <label>Date/Time :</label>
    <input class="w3-input w3-border" type="datetime-local" name="datetimeVerified">
    </div>
  </div>


    <div class="w3-padding-16"></div>
  </div> 
</div>

<div class="w3-container w3-center w3-padding-64">
<input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large" type="reset" name="reset" value="Reset"> 
<input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large" type="submit" name="Add" value="Save"> 
<button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large" onclick="window.location='profile.php'">Cancel</button>
</div>
</form>




<script src="js/sidebar.js"></script>
<script src="js/togglecontent.js"></script>
</body>
</html>