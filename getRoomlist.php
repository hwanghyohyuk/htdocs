<?php 
include_once( "DBControl.php");
	$db=new dbcontrol;
    $res = mysql_query("SELECT * FROM ROOM");  
    $result = array();  
    while($row = mysql_fetch_array($res)){  
      array_push($result,  
        array('RNO' =>$row[0], 'RNAME'=>$row[1],'RTYPE'=>$row[2] ,'RHOST' =>$row[3], 'RPNO'=>$row[4],'HOSTIP'=>$row[5] 
        ));  
    }  
    echo json_encode(array("RESULT"=>$result));   
?>