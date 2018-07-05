<?php 
require_once("Connection.php");
class Model{
	var $primary_key='';
	var $table_name='';
	var $info_conn;
	public function __construct(){
		$connection = new Connection();
		$this->info_conn= $connection->conn;
	}
	public function All(){
		$data=array();
		$query ="SELECT * FROM ".$this->table_name;
		$result= $this->info_conn->query($query);
		while ($row= $result->fetch_assoc()) {
			$data[]=$row;
		}
		return $data;
	}
	public function detail($input){
		$product;
		$query="SELECT * FROM ".$this->table_name." WHERE ".$this->primary_key."='".$input."'";
		$product=$this->info_conn->query($query)->fetch_assoc();
		return $product;
	}
	
	public function delete($id){
		$query="DELETE FROM ".$this->table_name." WHERE " .$this->primary_key ." ='".$id."'";
        //echo $query;
		$result=$this->info_conn->query($query);
		return $result;
	}
	public function create($data){
		$fields='';
		$values='';
		foreach ($data as $key => $value) {
			$fields.=$key.",";
			$values.="'".$value."',";
		}
		$fields=trim($fields,', ');
		$values=trim($values,', ');
		$query="INSERT INTO ".$this->table_name. "(".$fields.") VALUES (".$values.")";
		// echo $query;
		// die;
		$result=$this->info_conn->query($query);
		return $result;
	}
	public function update($data){

		$values='';
		foreach ($data as $key => $value) {
			$values.=$key."='".$value."',";
		}
		$values=trim($values,', ');
		$query=" UPDATE ".$this->table_name. " SET ".$values." WHERE ".$this->primary_key." ='".$data[$this->primary_key]."'";
		// echo $query;
		// die;
		$result=$this->info_conn->query($query);
		return $result;
	}
}
?>
