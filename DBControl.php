<?php

class dbControl{

	// -------------------------------------------------------------------
	// 생성자
	// -------------------------------------------------------------------
	function __construct(){

		// db서버 주소
		$hostname = "localhost:3306";
		// 사용자 id
		$username = "escape";
		// 사용자 패스워드
		$password = "angel";
		// 사용 db
		$dbname = "escape";

		$connect = mysql_connect($hostname, $username, $password) or die("SQL 서버에 접속할 수 없습니다.");
		$result = @mysql_select_db($dbname,$connect) or die("데이터베이스를 선택할 수 없습니다.");

		mysql_query('SET NAMES'.$mysql_charset);
		mysql_query('set session character_set_connection=utf8');
		mysql_query('set session character_set_results=utf8');
		mysql_query('set session character_set_client=utf8');

	}

	// -------------------------------------------------------------------
	// 테이블 생성
	// -------------------------------------------------------------------
	function db_create($Tname,$Attribute){
		$sql="create table ".$Tname."(".$Attribute.");";
		$result = mysql_query($sql);
		if(!$result) echo "테이블생성 실패";
	}
																		  
	// -------------------------------------------------------------------
	// 데이터 삽입
	// -------------------------------------------------------------------
	function db_insert($Tname, $data){
		$sql="insert into ".$Tname." VALUES (".$data.");";
		$result = mysql_query($sql);
		if(!$result) echo "1";
		else echo "0";
	}

	// -------------------------------------------------------------------
	// 데이터 삭제
	// -------------------------------------------------------------------
	function db_delete($Tname, $where){
		$sql="delete from ".$Tname." WHERE ".$where.";";
		$result = mysql_query($sql);
			echo $sql;
		if(!$result) echo "데이터삭제 실패";
		else echo "데이터삭제 성공";
	}

	// -------------------------------------------------------------------
	// 데이터 수정
	// -------------------------------------------------------------------
	function db_modify($Tname, $set, $where){
		$sql="update ".$Tname." SET ".$set." WHERE ".$where.";";
		$result = mysql_query($sql);
		if(!$result) echo "1";
		else echo "0";
	}


	// -------------------------------------------------------------------
	// 데이터 출력
	// -------------------------------------------------------------------
	function db_print($Tname){
		$sql="select * from ".$Tname.";";
		$result=mysql_query($sql);

		if($result){
			while($row = mysql_fetch_array($result)) $total[]=$row;
			return $total;
		}else echo "데이터출력 실패";
	}

	// -------------------------------------------------------------------
	// 쿼리 입력
	// -------------------------------------------------------------------
	function db_query($sql){
		$result = mysql_query($sql);
		if($result){
			$row = mysql_fetch_array($result);
			return $row;		
		}else{
			echo "쿼리 실패";
		}
	}
}

?>