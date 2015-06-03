<?php
include("config/services.php");
$conn = new services();
if($_POST['action']=='source' && $_POST['uses']=='hospital') {
    $sql = "SELECT `sid`,`hname`,`address1`,`address2`,`webaddress`,`phone` FROM " . $_POST['t'] . " WHERE sid = " . $_POST['sourceid'];
    $stmt = $conn->db->query($sql);
    $foods = $stmt->fetchAll(PDO::FETCH_OBJ);


    foreach($foods as $k => $f){
        $foods[$k]->sid = $conn->getstatesbystateid($f->sid);
    }
    //print_r($foods);

    $table = "<table class='tablesaw' data-tablesaw-mode='swipe' id='mytable'><thead><tr><th data-tablesaw-priority='persist' scope='col' class='" . $_POST['classarray'][0] . "'>State</th><th scope='col' class='" . $_POST['classarray'][1] . "'>Hospital Name</th><th scope='col' class='" . $_POST['classarray'][2] . "'>Address1 </th><th scope='col' class='" . $_POST['classarray'][3] . "'>Address2 </th><th scope='col' class='" . $_POST['classarray'][4] . "'>Webaddress</th><th scope='col' class='" . $_POST['classarray'][5] . "'>Phone</th></tr></thead><tbody id='place1'></tbody></table>";
    $arraykeys = array_keys((array)$foods[0]);
    echo json_encode(array("status"=>true, "table"=>$table, "arraykey"=>$arraykeys, "mydata"=>$foods));
    exit;
}

if($_POST['action']=='destination' && $_POST['uses']=='hospital') {
    $sql = "SELECT `sid`,`hname`,`address1`,`address2`,`webaddress`,`phone` FROM " . $_POST['t'] . " WHERE sid = " . $_POST['sourceid'];
    $stmt = $conn->db->query($sql);
    $foods = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($foods as $k => $f){
        $foods[$k]->sid = $conn->getstatesbystateid($f->sid);
    }

    $table = "<table class='tablesaw' data-tablesaw-mode='swipe' id='mytable1'><thead><tr><th data-tablesaw-priority='persist' scope='col' class='" . $_POST['classarray'][0] . "'>State</th><th scope='col' class='" . $_POST['classarray'][1] . "'>Hospital Name</th><th scope='col' class='" . $_POST['classarray'][2] . "'>Address1 </th><th scope='col' class='" . $_POST['classarray'][3] . "'>Address2 </th><th scope='col' class='" . $_POST['classarray'][4] . "'>Webaddress</th><th scope='col' class='" . $_POST['classarray'][5] . "'>Phone</th></tr></thead><tbody id='place1'></tbody></table>";
    $arraykeys = array_keys((array)$foods[0]);

    echo json_encode(array("status"=>true, "table"=>$table, "arraykey"=>$arraykeys, "mydata"=>$foods));
    exit;
}
?>