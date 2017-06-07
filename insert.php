	<?php 
	include_once( "DBControl.php");
	$name = $_POST[name];
	$addr=$_POST[addr];
	$db=new dbcontrol;
	$values="NULL,'$name','$addr'";
	$row = $db->db_insert("test1",$values);
	?>