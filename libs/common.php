<?php 
	include_once("db.php");
	class Common extends DB{
		function __construct(){
			$this->_conn = new mysqli($this->_host,$this->_user,$this->_pass,$this->_db);

			if($this->_conn->connect_error) {
			  die("Connection failed: " .$this->_conn->connect_error);
			}
			$this->_conn->query("SET NAMES 'utf8'");
		}
		function setQuery($sql)	{
			$this->_conn->query($sql);
		}
		function getAll($sql)
		{
			$result = $this->_conn->query($sql);
			$a = array();
			while( $row = $result-> fetch_assoc() ){
				$a[]=$row;
			}
			return $a; 
		}
		function getOne($sql){
			$a = array();
			$result = $this->_conn->query($sql);
			$a = $result-> fetch_assoc();
			return $a;
		}
		///ham lay 1 dong record theo id (bat ky)
		function getOneRecord($table,$id)
		{
			$sql= "SELECT * FROM $table WHERE id = $id";
			$result= $this->getOne($sql);
			return $result;
		}
		///ham lay tat ca record
		function getAllRecords($table,$order="ASC")
		{
			$sql = "SELECT * FROM ". $table ." ORDER BY id ".$order;
			$result= $this->getAll($sql);
			return $result;
		}
		//ham add them record vao 1 bang
		function addRecords($table,$param = array())
		{
			$sql= "INSERT INTO ".$table."(";
			$txtKey = "";
			$txtValue = "";
			$i=0;
			foreach($param as $key => $value){
				if($i < count($param)-1){
					$txtKey .="`".$key."`,";
					$txtValue .= "'".$value."',";
				}
				else{
					$txtKey .="`".$key."`";
					$txtValue .= "'".$value."'";
				}
				$i++;
			}
			$sql .= $txtKey;
			$sql .= ") VALUES (";
			$sql .= $txtValue;
			$sql .= ")";
			//echo $sql;
			$this->setQuery($sql);
		}
		///ham sua 1 dong record
		function editRecord($table, $id, $param = array())
		{
			$sql= "UPDATE ".$table." SET ";
			$txtSet = "";
			$i=0;
			foreach($param as $key => $value){
				if($i < count($param) - 1){
					$txtSet .= "$key = '$value', ";
				}
				else{
					$txtSet .= "$key = '$value'";
				}
				$i++;
			}
			$sql .= $txtSet;
			$sql .= " WHERE id = $id";
			//echo $sql;
			$this->setQuery($sql);
		}
		function trashItem($table,$id)
		{
			$sql= "UPDATE $table SET trash = 1 WHERE id = $id";
			$this->setQuery($sql);
		}
		function getNumberOfTrashItem($table)
		{
			$sql = "SELECT * FROM $table WHERE trash = 1";
			$result = $this->getAll($sql);
			$n = count($result);
			return $n;
		}
		function restoreItem($table,$id)
		{
			$sql= "UPDATE $table SET trash = 0 WHERE id = $id";
			$this->setQuery($sql);
		}
		function delItem($table,$id)
		{
			$sql= "DELETE FROM $table WHERE id = $id";
			$this->setQuery($sql);
		}
		function changeStatus($table,$id,$status){
			if($status == 1){
				$sql = "UPDATE ".$table." SET status = 0 WHERE id = ".$id;
			}
			else{
				$sql = "UPDATE ".$table." SET status = 1 WHERE id = ".$id;
			}
			//echo $sql;
			$this->setQuery($sql);
		}
		function checkExits($table,$record,$value){
			$sql = "SELECT * FROM $table where $record ='$value'";
			$result = $this->getAll($sql);
			$message = "";
			if(count($result)>0){
				$message = "$record đã tồn tại";
				return $message;
			}
			return 1;
		}
	}
?>