<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$con = mysqli_connect('localhost', 'triadinc_signin', 'secure99!*','triadinc_signin');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

// mysql_select_db("triadwww_signin", $con);

$t_id = addslashes($_POST['t_id']);
$t_status = addslashes($_POST['status']);
$back = addslashes($_POST['back']);
$message = addslashes($_POST['message']);

$query = "UPDATE signin SET t_message='" . $message . "' ,t_back='" . $back . "' ,t_status='" . $t_status . "' WHERE id=" . $t_id . "";

mysqli_query($con, $query);

mysqli_close($con);

header( 'Location: index.php' );
exit ();
?>