<!DOCTYPE html>
<html>
<head>
<title>Preventive Maintenance</title>
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
    <h2 class="w3-text-teal w3-center">Hospital Support Services</h2>
    </div>  
  </div>

  <div class="w3-cell-row ">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal w3-center">PREVENTIVE MAINTENANCE WORK</h3>
    </div>
  </div>

  <form action="php/insert_pMaintenance.php" method="post">
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
      <label>Date/Time:</label>
      <input class="w3-input w3-border" type="datetime-local" name="dateTime1" required>
    </div>
  </div>


  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small">
      <label>Hospital:</label>
      <input class="w3-input w3-border" type="text" name="hospital">
    </div>
    <div class="w3-col m7 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
    <label>Work Request No :</label>
    <input class="w3-input w3-border" type="text" name="workNo" required>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small">
      <label>Work Group:</label>
      <input class="w3-input w3-border" type="text" name="workGroup">
    </div>
    <div class="w3-col m2 w3-padding-small">
      <label>WR Type :</label>
      <input class="w3-input w3-border" type="text" name="wrType" required>
    </div>
    <div class="w3-col m2 w3-padding-small">
      <label>Period :</label>
      <input class="w3-input w3-border" type="text" name="period" required>
      </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>QC-PPM/RT</label>
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>QC-Uptime</label>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Asset No:</label>
      <input class="w3-input w3-border" type="text" name="assetNo">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Type Code:</label>
      <input class="w3-input w3-border" type="text" name="typeCode">
    </div>
  </div>
    
  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Asset Name:</label>
      <input class="w3-input w3-border" type="text" name="assetName">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Location Name:</label>
      <input class="w3-input w3-border" type="text" name="locationName">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Location Code:</label>
      <input class="w3-input w3-border" type="text" name="locationCode">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Department Name:</label>
      <input class="w3-input w3-border" type="text" name="departmentName">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Asset status:</label>
      <input class="w3-input w3-border" type="text" name="assetStatus">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Asset Critically:</label>
      <input class="w3-input w3-border" type="text" name="assetCritically">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Variation status:</label>
      <input class="w3-input w3-border" type="text" name="variationStatus">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Asset Condition:</label>
      <input class="w3-input w3-border" type="text" name="assetCondition">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Brand/Model:</label>
      <input class="w3-input w3-border" type="text" name="brandModel">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Serial No:</label>
      <input class="w3-input w3-border" type="text" name="serialNo">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Manufacturer Brand:</label>
      <input class="w3-input w3-border" type="text" name="manufacturer">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Vendor:</label>
      <input class="w3-input w3-border" type="text" name="vendor">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Service Agent:</label>
      <input class="w3-input w3-border" type="text" name="serviceAgent">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Service Life(Yrs):</label>
      <input class="w3-input w3-border" type="text" name="serviceLife">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Contact Person:</label>
      <input class="w3-input w3-border" type="text" name="contactPerson">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Phone No:</label>
      <input class="w3-input w3-border" type="text" name="phoneNo">
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m3 w3-padding-small">
      <label>Previous Work Date:</label>
      <input class="w3-input w3-border" type="date" name="pWorkDate">
    </div>
    <div class="w3-col m2 w3-padding-small">
    <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Previous Repair Date:</label>
      <input class="w3-input w3-border" type="date" name="pRepairDate">
    </div>
  </div>

<div class="w3-container w3-responsive "  id="" style="padding-top: 32px;">
  <table class="w3-table w3-bordered w3-card-4">
  <tr>
    <th>Task No</th>
    <th>Description</th>
    <th>Target Date</th>
    <th>Next</th>
    <th>Status</th>
  </tr>

  <tr class="w3-light-grey">
  <td><input type="text" name="taskNo" class="w3-input w3-border-0"></td>
  <td>
    <textarea class="w3-input w3-border" rows="3" cols="40" input type="text" style="resize: none;" name="description"></textarea>
  </td>

  <td><input type="date" name="targetDate" class="w3-input w3-border-0"></td>
  <td><input type="text" name="next" class="w3-input w3-border-0"></td>
  <td><input type="text" name="statusTask" class="w3-input w3-border-0"></td>
  </tr>

  </table>
</div>

  <div class="w3-row w3-container" style="padding-top: 32px;">
    <div class="w3-col m4 w3-padding-small">
      <label>Requested Details:</label>
      <textarea class="w3-input w3-border" style="resize: none;"  input type="text" name="requestedDetails"></textarea>
    </div>
  </div>

  <div class="w3-cell-row w3-padding-small">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal">Preventive Work Request
    </h3>
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 32px;">
    <div class="w3-col m4 w3-padding-small">
      <label>Contract/Warranty Information:</label>
      <input type="text" name="cWarrantyInformation" class="w3-input w3-border">
    </div>
    <div class="w3-col m1 w3-padding-small">
      <wbr>
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label>Contractor/Company Name:</label>
      <input type="text" name="cCompanyName" class="w3-input w3-border">
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