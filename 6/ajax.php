<?php
	include("config/services.php");
	$conn = new services();
	
	if($_POST['action']=='source'){
		$foods = $conn->getFoodbyState($_POST['sourceid']);
		$array = array();
		$array[] = $conn->getstatesbystateid($_POST['sourceid']);
		foreach($foods as $food){
			$array[] = "$".$food->price;
		}
		$text = '';
		foreach($_POST['classarray'] as $key => $val){
			$text .= '<td class="'.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
		}
		echo json_encode(array("status"=>true, "food"=>$text));
	}
	
	if($_POST['action']=='destination'){
		$foods = $conn->getFoodbyState($_POST['sourceid']);
		$array = array();
		$array[] = $conn->getstatesbystateid($_POST['sourceid']);
		foreach($foods as $food){
			$array[] = "$".$food->price;
		}
		$text = '';
		foreach($_POST['classarray'] as $key => $val){
			$text .= '<td class="'.$_POST['classarray'][$key].'">'.$array[$key].'</td>';
		}
		echo json_encode(array("status"=>true, "food"=>$text));
	}
?>