<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$add = $_GET["add"];
$cid = $_GET["cid"];
$cid = substr($cid,1);


$con = mysqli_connect('localhost', 'triadinc_signin', 'secure99!*','triadinc_signin');

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

// mysql_select_db("triadwww_signin", $con);

$comment = addslashes($_POST['comment']);

if($add == 1) {
	$query = "INSERT INTO comment (commentmess,posttime) VALUES ('".$comment."',now())";
}

if($add == 2) {
	$query = "DELETE FROM comment WHERE id='".$cid."'";
}

mysqli_query($con, $query);

mysqli_close($con);

header( 'Location: index.php' );
exit ();
?>