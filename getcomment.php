<?php
$q = $_GET["q"];
$cid = $_GET["cid"];

if($q == 1){
  echo '<form method="post" action="update-comments.php?add=1" style="padding-top: 15px;">';	  
  echo '<div class="row edit-row">';
  echo '<div class="col1">Comment: </div><textarea name="comment" id="comment" rows="14" cols="40"></textarea><div class="clear"></div>';
  echo '<INPUT TYPE="image" SRC="update-off.jpg" WIDTH="81"  HEIGHT="32" BORDER="0" ALT="SUBMIT" class="update"> ';
  echo '</div>';
  echo '</form>';
}

if($q == 2){
  echo '<form method="post" action="update-comments.php?add=2&cid='.$cid.'" style="padding-top: 15px;">';	  
  echo '<div class="row edit-row">';
  echo '<div class="col comment">Are you sure you want to delete this entry?</div><div class="clear"></div>';
  echo '<INPUT TYPE="image" SRC="delete-btn.jpg" WIDTH="81" HEIGHT="32" BORDER="0" ALT="SUBMIT" class="update"> ';
  echo '</div>';
  echo '</form>';
}

?>