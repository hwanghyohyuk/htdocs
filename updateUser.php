	<?php 
	include_once( "DBControl.php");
	$first = $_POST[FIRST]; //기존 닉네임
	$last = $_POST[LAST]; //변경할 닉네임
	$db=new dbcontrol;
	//$set = "NAME='$last'";
	//$where = "NAME='$first'";
	$row = $db->db_modify("USER","NAME='$last'","NAME='$first'");
	//UPDATE USER SET NAME='효혁이당' WHERE NAME='효혁1';
	?>

<!--

	// -------------------------------------------------------------------
	// 데이터 수정
	// -------------------------------------------------------------------
	function db_modify($Tname, $set, $where){
		$sql="update ".$Tname." SET ".$set." WHERE ".$where;
		$result = mysql_query($sql);
		if(!$result) echo "1";
		else echo "0";
	}

	-->