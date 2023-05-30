<?php

class Rest {

function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "bismiL@hi1";
    $dbname = "restsmart";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    return $conn;

}

function insertPhone($data){ 		
	$Id=$data["id"];
	$Nom=$data["nom"];
	$Prix=$data["prix"];
	$Img=$data["image"];
	
	$query="
		INSERT INTO Phone
		SET id='".$Id."', 
		nom='".$Nom."', 
		prix='".$Prix."', 
		image='".$Img."'
		";
	
    if( mysqli_query($this->getConnection(), $query)) {
		$messgae = "Phone added Successfully.";
		$status = 1;			
	} else {
		$messgae = "Phone added failed.";
		$status = 0;			
	}
	$empResponse = array(
		'status' => $status,
		'status_message' => $messgae
	);
	header('Content-Type: application/json');
	echo json_encode($empResponse);
}

function getAll() {

	
	$query = "
		SELECT * 
		FROM Phone ";	
	$resultData = mysqli_query($this->getConnection(), $query);
	$movieData = array();
	while( $record = mysqli_fetch_assoc($resultData) ) {
		$movieData[] = $record;
	}
	header('Content-Type: application/json');
    
	echo json_encode($movieData);	

}




}

?>