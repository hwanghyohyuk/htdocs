	<?php 
	include_once( "DBControl.php");
	$rhost = $_POST[RHOST];
	$db=new dbcontrol;
	$values="RHOST = '$rhost'";
	$row = $db->db_delete("ROOM",$values);
	?>