<?php
class Libs_Database{
	private $conn;
	public function __construct(){
		
	}

	public function connect(){
		if($this->conn == mysql_connect(DB_HOST, DB_USER, DB_PASS)){
			if(!mysql_select_db(DB_DATA))
			{
				die("Not connect database");
			}
		}
		else{
			die("Not connect server");
		}
	}

	public function executeQuery($sql){
		$array = new ArrayObject();
		$result = mysql_query($sql);
		if(mysql_num_rows($result) > 0){
			while ($row = mysql_fetch_object($result)) {
				$array->append($row);
			}
		}
		return $array;
	}

	public function disconnect(){
		mysql_close($this->conn);
	}
}