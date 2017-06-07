<!-- 헤더 부분 -->
<?php include_once("DocHead.php"); ?>
<?php include_once("Header.php"); ?>
<!-- 컨텐츠 부분 -->
<h3>MySQL DB연동 TEST 2 &nbsp;<input type = "button" value="새로고침" onclick="window.location.reload()"><h1>
<hr/>
<div class="db">
<table id="DBtable">
  <thead>
	<tr>
        <th scope="cols">RNO</th>
        <th scope="cols">RNAME</th>
        <th scope="cols">RHOST</th>
		<th scope="cols">RHOSTIP</th>
		<th scope="cols">RTOGGLE</th>
    </tr>
	<tbody>
	<?/*php include_once( "DBControl.php");
	$db=new dbcontrol;
	$row = $db->db_print("test1");
	foreach($row as $data){
	echo "
	<tr>
        <td>$data[tno]</th>
        <td>$data[name]</th>
        <td>$data[addr]</th>
    </tr>
	";
	}*/?>
    </tbody>
	   </thead>
	   </table>
	   </div>
	   
<!-- 푸터 부분 -->
<?php include_once( "Footer.php"); ?>