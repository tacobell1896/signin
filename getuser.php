<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$q=$_GET["q"];

$q = substr($q,1);

$con = mysqli_connect('localhost', 'triadwww_signin', 'secure99!*','triadwww_signin');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

// mysql_select_db("triadwww_signin", $con);

// $sql="SELECT * FROM signin";
$sql="SELECT * FROM signin WHERE id = '".$q."'";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result))
  {
$in = "";
$out = "";
$conf = "";
$lunch = "";
$sick = "";
$vac = "";
$back = "";
	  
$status = $row['t_status'];

	switch ($status) {
    case 1:
        $in = 'checked';
        break;
    case 2:
        $out = 'checked';
        break;
    case 3:
        $conf = 'checked';
        break;
	case 4:
        $lunch = 'checked';
        break;
	case 5:
        $sick = 'checked';
        break;
	case 6:
        $vac = 'checked';
        break;
}  
  echo '<form method="post" action="update.php">';	  
  echo '<div class="row edit-row">';
  echo '<div class="col name-edit" id="a1">' . $row['t_name'] . '</div><div class="clear"></div>';
  echo '<div class="col phone" id="a1">' . $row['t_phone'] . '</div><div class="clear"></div>';
  echo '<div class="col email" id="a1"><a href="mailto:' . $row['t_email'] . '">' . $row['t_email'] . '</a></div><div class="clear"></div>';
  echo '<div class="col-in"><div class="col1">In: </div><input name="status" id="status" type="radio" value="1"' . $in . '></div><div class="clear"></div>';
  echo '<div class="col-out"><div class="col1">Out: </div><input name="status" id="status" type="radio" value="2"' . $out . '></div><div class="clear"></div>';
  echo '<div class="col-conf"><div class="col1">Conference: </div><input name="status" id="status" type="radio" value="3"' . $conf . '></div><div class="clear"></div>';
  echo '<div class="col-lunch"><div class="col1">Lunch: </div><input name="status" id="status" type="radio" value="4"' . $lunch . '></div><div class="clear"></div>';
  echo '<div class="col-sick"><div class="col1">Sick: </div><input name="status" id="status" type="radio" value="5"' . $sick . '></div><div class="clear"></div>';
  echo '<div class="col-vac"><div class="col1">Vacation: </div><input name="status" id="status" type="radio" value="6"' . $vac . '></div><div class="clear"></div>';
  echo '<div class="col1">Back: </div><input name="back" id="back" type="text" value="' . $row['t_back'] . '" size="50"><div class="clear"></div>';
  echo '<div class="col1">Message: </div><input name="message" id="message" type="text" value="' . $row['t_message'] . '" size="50"><div class="clear"></div>';
  echo '<input name="t_id" id="t_id" type="hidden" value="' . $row['id'] . '">';
  echo '<INPUT TYPE="image" SRC="update-off.jpg" WIDTH="81"  HEIGHT="32" BORDER="0" ALT="SUBMIT" class="update"> ';
  echo '</div>';
  echo '</form>';
  }




mysqli_close($con);
?>