<?php require('php/view_wReqForm.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Work Request</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/mystyle.css">

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
<form action="php/update_wReq.php" method="post">
  <div class="w3-row w3-container">

    <div class="w3-col m8 w3-padding-small"><wbr></div>

    <div class="w3-col m2 w3-padding-small">
      <label> Status :</label>
      <select class="w3-select w3-border" name="status">
      <option value="Open" <?php echo $selected1 ?>>Open</option>
      <option value="Pending" <?php echo $selected2 ?>>Pending</option>
      <option value="Closed" <?php echo $selected3 ?>>Closed</option>
    </select> 
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
      <label> Hospital :</label>
      <input class="w3-input w3-border" type="text" name="hospital" required value='<?php echo $hospital ?>'>  
    </div>

    <div class="w3-col m3 w3-padding-small">
      <wbr>
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label> Work Request No :</label>
      <input class="w3-input w3-border" type="text" name="wrNo" required value='<?php echo $wrNo ?>'>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
      <label> Target Date :</label>
      <input class="w3-input w3-border" type="date" name="targetDate" style="width: 180px" value='<?php echo $targetDate ?>'>  
    </div>

    <div class="w3-col m3 w3-padding-small">
      <wbr>
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label> Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="datetime" value='<?php echo $datetimeView ?>'>  
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 16px">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Requestor :</label>
      <input class="w3-input w3-border" type="text" name="requestor" required value='<?php echo $requestor ?>'>  
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label> Category :</label>
      <input class="w3-input w3-border" type="text" name="category" value='<?php echo $category ?>'>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Asset No :</label>
      <input class="w3-input w3-border" type="text" name="assetNo" value='<?php echo $assetNo ?>'>  
    </div>

    <div class="w3-col m2 w3-padding-small">
      <label> Workgroup :</label>
      <input class="w3-input w3-border" type="text" name="workgroup" value='<?php echo $workgroup ?>'>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m4 w3-padding-small">
      <label> Details :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="details"><?php echo $details ?></textarea>
    </div>
    <div class="w3-col m4 w3-padding-small">
      <label> Action Taken :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="actionTaken"><?php echo $actionTaken ?></textarea>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Start Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="startDatetime" value='<?php echo $startdatetimeView ?>'>  
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label> End Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="endDatetime" value='<?php echo $enddatetimeView ?>'>  
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label> Actual Closed Date :</label>
      <input class="w3-input w3-border" type="date" name="actualclosedDate" style="width: 180px" value='<?php echo $actualclosedDate ?>'>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m4 w3-padding-small">
      <label> Justification Outstanding :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="justificationOutstanding" value='<?php echo $justificationOutstanding ?>'></textarea>
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 32px">
    <div class="w3-col m4 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
    <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save"> 
    </div>
    <div class="w3-col m2 w3-padding-small">
    <button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" onclick="window.location='profile.php'">Cancel</button>
    </div>
  </div>

</form>

</div>

<div class="w3-container w3-center w3-padding-64">

 

</div>
</form>




<script src="js/sidebar.js"></script>
<script src="js/togglecontent.js"></script>
</body>
</html>