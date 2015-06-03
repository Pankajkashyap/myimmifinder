<?php
	include("config/services.php");
	$conn = new services();
	
	if($_POST['action']=='source'){
		$sql= "SELECT * FROM ".$_POST['t']." WHERE sid = ".$_POST['sourceid'];
		$stmt = $conn->db->query($sql); 
		$foods = $stmt->fetch();
		//print_r($foods);
		$array = array();
		if(count($foods) == 14){
			$array[] = $conn->getstatesbystateid($_POST['sourceid']);
			if($_POST['t'] == 'attire'){
				$array[] = $foods[1];
				$array[] = $foods[2];
			} else {
				$array[] = "$".$foods[1];
				$array[] = "$".$foods[2];
			}	
		} else {
			$array[] = $conn->getstatesbystateid($_POST['sourceid']);
			if($_POST['t'] == 'attire'){
				$array[] = $foods[1];
			} else {
				$array[] = "$".$foods[1];
			}
		}
		$text = '';
		foreach($_POST['classarray'] as $key => $val){
			if($key == 0){
				$text .= '<td class="statehead '.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
			} else {
				$text .= '<td class="'.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
			}	
		}
		echo json_encode(array("status"=>true, "food"=>$text));
	}
	
	if($_POST['action']=='destination'){
		$sql= "SELECT * FROM ".$_POST['t']." WHERE sid = ".$_POST['sourceid'];
		$stmt = $conn->db->query($sql); 
		$foods = $stmt->fetch();
		$array = array();
		if(count($foods) == 14){
			$array[] = $conn->getstatesbystateid($_POST['sourceid']);
			if($_POST['t'] == 'attire'){
				$array[] = $foods[1];
				$array[] = $foods[2];
			} else {
				$array[] = "$".$foods[1];
				$array[] = "$".$foods[2];
			}
		} else {
			$array[] = $conn->getstatesbystateid($_POST['sourceid']);
			if($_POST['t'] == 'attire'){
				$array[] = $foods[1];
			} else {
				$array[] = "$".$foods[1];
			}
		}
		$text = '';
		foreach($_POST['classarray'] as $key => $val){
			if($key == 0){
				$text .= '<td class="statehead '.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
			} else {
				$text .= '<td class="'.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
			}	
		}
		echo json_encode(array("status"=>true, "food"=>$text));
	}
?>