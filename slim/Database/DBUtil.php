<?php
	//��������
	//ѡ�����ݿ�/�������ݿ�
	class DBUtil{
		//�������ݿ�
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