<?php
function __autoload($class){
    require_once($class . '.php');
}

class services extends connection {
	public $db;

	public function __construct(){
		$this->db = parent::__construct();
	}

	public function getCountries(){
		$sql= "SELECT * FROM country ORDER BY cid ASC";
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getCountryDetail($id){
		$sql= "SELECT * FROM country_comparison WHERE countryid = ".$id;
		$stmt = $this->db->query($sql); 
		$row =$stmt->fetchObject();
		return $row;
	}
	
	public function getCountry($id){
		$sql= "SELECT * FROM country WHERE cid = ".$id;
		$stmt = $this->db->query($sql); 
		$row =$stmt->fetchObject();
		return $row;
	}
	
	public function getFood($id){
		$sql= "SELECT * FROM food WHERE countryid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getStates($id){
		$sql= "SELECT * FROM food WHERE countryid = '".$id."' group by state";
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
}