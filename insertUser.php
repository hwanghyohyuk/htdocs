	<?php 
	include_once( "DBControl.php");
	$name = $_POST[NAME];
	$db=new dbcontrol;
	$values="'$name'";
	$row = $db->db_insert("USER",$values);
	?>