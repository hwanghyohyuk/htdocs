	<?php 
	include_once( "DBControl.php");
	$rname = $_POST[RNAME];
	$rtype = $_POST[RTYPE];
	$rhost = $_POST[RHOST];
	$hostip = $_POST[HOSTIP];

	$db=new dbcontrol;
	$values="NULL,'$rname','$rtype','$rhost','1','$hostip'";
	$row = $db->db_insert("ROOM",$values);

	/*
	function db_insert($Tname, $data){
		$sql="insert into ".$Tname." VALUES (".$data.");";
		$result = mysql_query($sql);
		echo $sql;
		if(!$result) echo "데이터 입력 실패";
		else echo "데이터 입력 성공";
	}
	*/
	?>

