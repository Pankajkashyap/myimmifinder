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
		$sql= "SELECT f.*, ls.name FROM food f INNER JOIN lookup_state ls ON ls.sid = f.state WHERE countryid = ".$id;
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
	
	public function getStateName($id){
		$sql= "SELECT * FROM lookup_state WHERE sid = ".$id;
		$stmt = $this->db->query($sql); 
		$row =$stmt->fetchObject();
		return $row->name;
	}
	
	public function getFoodbyState($stateid){
		$sql= "SELECT * FROM food WHERE state = '".$stateid."' ORDER BY id ASC";
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getstatesbycountry($cid){
		$sql= "SELECT * FROM lookup_state WHERE cid = ".$cid;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getstatesbystateid($stateid){
		$sql= "SELECT * FROM lookup_state WHERE sid = ".$stateid;
		$stmt = $this->db->query($sql); 
		$row =$stmt->fetchObject();
		return $row->name;
	}
	
}