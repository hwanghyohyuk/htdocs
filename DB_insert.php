	<?php 
	include_once( "DocHead.php");
	include_once( "Header.php");
	include_once( "DBControl.php");
	$db=new dbcontrol;
	$name=$_POST[name];
	$addr=$_POST[addr];
	$values="NULL,'$name','$addr'";
	$row = $db->db_insert("test1",$values);
?>
<hr/><input type = "button" value="홈으로" onclick="location.href='index.php';">
	<?
	include_once( "Footer.php");
	?>