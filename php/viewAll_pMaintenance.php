<?php
require('php/connect.php');

$result=mysqli_query($db,"SELECT * FROM preventivemaintenance");
if (!$result)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }

$per_page = 20;
$total_results = mysqli_num_rows($result);
$total_pages = ceil($total_results / $per_page);
if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];
// make sure the $show_page value is valid
if ($show_page > 0 && $show_page <= $total_pages)

{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}

else

{
// error - show first set of results
$start = 0;
$end = $per_page;
}

}

else

{
// if page isn't set, show first set of results
$start = 0;
$end = $per_page;
}

  echo "<link rel='stylesheet' type='text/css' href='../css/w3.css' />";
  echo "<div class='w3-responsive w3-container'>";
  echo "<table class='w3-table w3-bordered'>";

  echo "<tr> <th>No</th> <th>Work No</th> <th>Requested Date/Time</th> <th>Status</th> <th>Aging</th> <th></th> <th></th> </tr>";

//Alternative to mysql_result()
  function mysqli_result($result, $iRow, $field = 0)
{
    if(!mysqli_data_seek($result, $iRow))
        return false;
    if(!($row = mysqli_fetch_array($result)))
        return false;
    if(!array_key_exists($field, $row))
        return false;
    if ($field=='dateTime1') {
      return $dateView = date("d-m-Y h:i A", strtotime($row[$field]));
    }
    return $row[$field];
}

  function calculateAging($result, $iRow, $field = 0)
{
    if(!mysqli_data_seek($result, $iRow))
        return false;
    if(!($row = mysqli_fetch_array($result)))
        return false;
    if(!array_key_exists($field, $row))
        return false;

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $current=date('d-m-Y H:i:s');
    $days = (strtotime($current) - strtotime($row[$field])) / (60 * 60 * 24);
    return ceil($days);
}
$j=1;


for ($i = $start; $i < $end; $i++)

{
// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }

	echo "<tr>";
  	echo '<td>'.$j. '</td>';
  	//echo '<td><b>'.$row['wrNo']. '</b></td>';
  	echo '<td>' . mysqli_result($result, $i, 'workNo') . '</td>';
    echo '<td>' . mysqli_result($result, $i, 'dateTime1') . '</td>';
  	echo '<td>' . mysqli_result($result, $i, 'status') . '</td>';
  	echo '<td align="center">' . calculateAging($result, $i, 'dateTime1') . '</td>';
  	echo '<td><a href="edit_pMainForm.php?id=' . mysqli_result($result, $i, 'ID') . '">Edit</a></td>';
  	echo '<td><a href="php/delete_preventiveMaintenance.php?id=' . mysqli_result($result, $i, 'ID') . '">Delete</a></td>';
  	$j++;
  }

echo "</table>";
echo "</div>";


echo "<div class='w3-center w3-padding-16'><b>Pages</b><br></div>";
// echo out the contents of each row into a table
  for ($i = 1; $i <= $total_pages; $i++)

{


  // Pagination
echo "<div class='w3-center'>";
echo "<div class='w3-bar'>";
echo "<a class='w3-button w3-theme' href='showAll_pMaintenance.php?page=$i'>$i</a>";
echo "</div>";
echo "</div>";


}

mysqli_close($db);
?>