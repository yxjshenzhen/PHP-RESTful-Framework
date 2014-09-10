<?php
	//创建连接
	//选择数据库/创建数据库
	class DBUtil{
		//连接数据库
		public function createConnect($url,$username,$pwd){
			
			$conn = mysql_connect($url,$username,$pwd);
			if (!$conn)
			{
				die('Could not connect: '.mysql_error());
			}else{
				//echo "success~~~";
			}
				return $conn;
		}
		
		public function selectDataBaseName($dbname,$con){
			//echo "</br>run selectDataBaseName..</br>";
			mysql_select_db($dbname, $con);
		}
		
		public function querySQL($sql,$con){
			//echo "</br>run querySQL..</br>";
			mysql_query($sql,$con);
		}
		
		public function closeConnect($con){
			//echo "</br>run closeConnect..</br>";
			mysql_close($con);
		}
	}

?>