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
	
	public function getData($id){
		$sql= "SELECT tm.*, ls.name as statename FROM tariff_and_mobile tm INNER JOIN lookup_state ls ON ls.sid = tm.sid WHERE tm.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	/* public function getDataSource($id){
		$sql= "SELECT * FROM tariff_and_mobile WHERE cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	} */
	
	public function getFitness($id){
		$sql= "SELECT ft.*, ls.name as statename FROM fitness_and_tennis ft INNER JOIN lookup_state ls ON ls.sid = ft.sid WHERE ft.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	/* public function getFitnessSource($id){
		$sql= "SELECT * FROM fitness_and_tennis WHERE cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	} */
	
	
	public function getGame($id){
		$sql= "SELECT g.*, ls.name as statename FROM game g INNER JOIN lookup_state ls ON ls.sid = g.sid WHERE g.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	
	public function getEntertainment($id){
		$sql= "SELECT e.*, ls.name as statename FROM entertainment e INNER JOIN lookup_state ls ON ls.sid = e.sid WHERE e.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	
	public function getResidenceRent($id){
		$sql= "SELECT ft.*, ls.name as statename FROM residencerent ft INNER JOIN lookup_state ls ON ls.sid = ft.sid WHERE ft.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	
	public function getSalary($id){
		$sql= "SELECT ss.*, ls.name as statename FROM  salary ss INNER JOIN lookup_state ls ON ls.sid = ss.sid WHERE ss.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	
	public function getAttire($id){
		$sql= "SELECT at.*, ls.name as statename FROM attire at INNER JOIN lookup_state ls ON ls.sid = at.sid WHERE at.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getTobacco($id){
		$sql= "SELECT tob.*, ls.name as statename FROM tobacco tob INNER JOIN lookup_state ls ON ls.sid = tob.sid WHERE tob.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
	public function getTransportation($id){
		$sql= "SELECT t.*, ls.name as statename FROM transportation t INNER JOIN lookup_state ls ON ls.sid = t.sid WHERE t.cid = ".$id;
		$stmt = $this->db->query($sql); 
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}

	public function getHospital($id){
		$sql= "SELECT h.*, ls.name as statename FROM hospital h INNER JOIN lookup_state ls ON ls.sid = h.sid WHERE h.cid = ".$id;
		$stmt = $this->db->query($sql);
		$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $rows;
	}
	
}