<?php
	include("DBUtil.php");
	$dbutil = new DBUtil();
	//创建数据库连接
	$conn = $dbutil->createConnect("localhost","root","123456");
	
	//选择一个数据库
	$dbutil->selectDataBaseName("php_db",$conn);
	
	$sql = "select * from php_user";
	
	$result = mysql_query($sql,$conn);
	
	while($row = mysql_fetch_array($result)) {
		echo $row["userName"].'</br>';
		echo $row["userPassword"].'</br></br>';
	}	
	mysql_free_result($result);
	$dbutil->closeConnect($conn);
?>