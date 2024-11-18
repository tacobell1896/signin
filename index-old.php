<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Refresh" CONTENT="300; URL=index.php"> 
<title>TriAd Sign in Board</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
function showUser(str)
{
	
if (str=="")
  {
  document.getElementById("pop-in").innerHTML="x";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pop-in").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}

function showUserx(str)
{

 if (str=="")
  {
  document.getElementById("pop-in").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pop-in").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
	
	$("#overlay").animate({opacity:.9},"slow");
	$("#overlay").css('z-index' , '300');
	$("#pop-in").animate({opacity:1},"slow");
	$("#pop-in").css('z-index' , '500');
	$("#pop-in").html('');
}

$(document).ready(function(){
	
//  $(".name").click(function(){
//	$("#overlay").animate({opacity:.9},"slow");
//	$("#overlay").css('z-index' , '300');
//	$("#pop-in").animate({opacity:1},"slow");
//	$("#pop-in").css('z-index' , '500');
//	var ab = $(this).attr("id");
//  });

$("#overlay").click(function(){
	$("#overlay").animate({opacity:0},"slow");
	$("#pop-in").animate({opacity:0},"slow", function() {
		$("#overlay").css('z-index' , '-150');
		$("#pop-in").css('z-index' , '-150');
	});
	
});

});


$(document).ready(function(){
// showUser();
});

</script>

<style type="text/css">
body {
	padding:0;
	margin:0;
	height: 100%;
	width: 100%;
	position: absolute;
}
.bg {
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: -50;
}
.content {
	color: #000;
	width: 900px;
	margin-right: auto;
	margin-bottom: 50px;
	margin-left: auto;
	background-color: #FFF;
	padding: 25px;
	border: 10px solid #01AEF0;
	border-radius: 15px;
	position: relative;
	top: -300px;
	z-index: 200;
}
.row {
	width: 100%;
	margin: 3px 10px 3px 10px;
	padding-bottom: 0px;
	border-bottom-width: 3px;
	border-bottom-style: dotted;
	border-bottom-color: #E2F2F3;
	display: inline-block;
}
.edit-row {
    width: 500px;
	font-family: "Courier New", Courier, monospace;
}
.col {
	float: left;
	margin: 0 20px 0 20px;
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: normal;
	color: #002D56;
	min-height: 30px;
}
.col1 {
  width: 140px;
  float: left;
  text-align: right;
  padding-right: 6px;
}
div.header .col {
    font-size: 18px;
	font-weight: bold;	
	color: #002D56;
	text-decoration: none;
}
.name {
    margin-left: 0px;	
	width: 120px;
	cursor: pointer;
	color: -webkit-link;
    text-decoration: underline;
}
.name-edit {
    width: 500px;
	font-size: 22px;
	font-weight: bold;
	margin-bottom: 10px;	
}
.phone {
	width: 70px;
}
.email {
	width: 180px;
}
.in {
	width: 20px;
	margin-right: 10px;
	cursor: pointer;
}
.out {
	width: 20px;
	margin-left: 10px;
	cursor: pointer;
}
.conf {
	width: 20px;
	margin-left: 10px;
	cursor: pointer;
}
.lunch {
	width: 20px;
	cursor: pointer;
}
.sick {
	width: 20px;
	margin-left: 35px;
	cursor: pointer;
}
.vac {
	width: 20px;
	cursor: pointer;
}
.back {
	width: 80px;
}
.message {
	width: 240px;
}
#overlay {
    background-color: #fff;	
	display:block;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
	z-index: -150;
}

#pop-in {
	background-color: #fff;
	display: block;
	position: relative;
	margin: 0px auto 0 auto;
	border: 10px solid #01AEF0;
	width: 550px;
	height: 320px;
	z-index: -150;
	border-radius: 15px;
	top: 150px;
}
.update {
   float:right;
   margin: 10px 20px 0 0;	
}
#container {
	position: relative;	
	height: 1750px;
}
.clear {
  clear: both;	
}
.lunch img {
   padding-left: 20px;	
}
.conf img {
   padding-left: 15px;	
}
.sick img {
   padding-left: 15px;	
}


</style>
</head>

<body>

<img src="bg.jpg" class="bg" />
<div id="container">
<div id="pop-in" style="opacity: 0;">

</div> <!-- end pop-in -->
<div id="overlay" style="opacity: 0;"></div>

<div class="content">

<div class="row header">
<div class="col name">Name</div>
<!-- <div class="col phone">Phone</div>
<div class="col email">Email</div> -->
<div class="col in">In</div>
<div class="col out">Out</div>
<div class="col conf">Conf</div>
<div class="col lunch">Lunch</div>
<div class="col sick">Sick</div>
<div class="col vac">Vac</div>
<div class="col back">Back</div>
<div class="col message">Message</div>
</div>

<div id="userlist">
<?php
$con = mysql_connect('localhost', 'triadwww_signin', 'secure99!*');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("triadwww_signin", $con);

$sql="SELECT * FROM signin ORDER BY t_name ASC";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
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
        $in = '<img src="green-icon.png" width="20" height="20">';
        break;
    case 2:
        $out = '<img src="red-icon.png" width="20" height="20">';
        break;
    case 3:
        $conf = '<img src="red-icon.png" width="20" height="20">';
        break;
	case 4:
        $lunch = '<img src="red-icon.png" width="20" height="20">';
        break;
	case 5:
        $sick = '<img src="red-icon.png" width="20" height="20">';
        break;
	case 6:
        $vac = '<img src="red-icon.png" width="20" height="20">';
        break;
}  
	  
  echo '<div class="row">';
  echo '<div class="col name" id="a ' . $row['id'] . '" onclick="showUserx(this.id)">' . $row['t_name'] . '</div>';
  // echo '<div class="col phone">' . $row['t_phone'] . '</div>';
  //  echo '<div class="col email"><a href="mailto:' . $row['t_email'] . '">' . $row['t_email'] . '</a></div>';
  echo '<div class="col in" id="b ' . $row['id'] . '" onclick="showUserx(this.id)">' . $in . '</div>';
  echo '<div class="col out" id="c ' . $row['id'] . '" onclick="showUserx(this.id)">' . $out . '</div>';
  echo '<div class="col conf" id="d ' . $row['id'] . '" onclick="showUserx(this.id)">' . $conf . '</div>';
  echo '<div class="col lunch" id="e ' . $row['id'] . '" onclick="showUserx(this.id)">' . $lunch . '</div>';
  echo '<div class="col sick" id="f ' . $row['id'] . '" onclick="showUserx(this.id)">' . $sick . '</div>';
  echo '<div class="col vac" id="g ' . $row['id'] . '" onclick="showUserx(this.id)">' . $vac . '</div>';
  echo '<div class="col back">' . $row['t_back'] . '</div>';
  echo '<div class="col message">' . $row['t_message'] . '</div>';
  echo '</div>';
  }

mysql_close($con);
?>
</div>



</div> <!-- end content -->

</div> <!-- end container -->

</body>
</html>