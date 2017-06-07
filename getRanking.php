<?php 
include_once( "DBControl.php");
	$db=new dbcontrol;
    $res = mysql_query("SELECT * FROM RANK WHERE TIME>0 ORDER BY TIME ASC");  
    $result = array();  
    while($row = mysql_fetch_array($res)){  
      array_push($result, array('NAME' =>$row[0], 'TIME'=>$row[1]));  
    }  
    echo json_encode(array("RESULT"=>$result));   
?>