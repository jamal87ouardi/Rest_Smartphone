<?php

class Rest {

function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "bismiL@hi1";
    $dbname = "restmovie";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    return $conn;

}

function insertMovie($data){ 		
	$movieId=$data["id"];
	$movieTitle=$data["title"];
	$movieImg=$data["image"];
	
	$query="
		INSERT INTO Movie
		SET id='".$movieId."', 
		title='".$movieTitle."', 
		image='".$movieImg."'
		";
	
    if( mysqli_query($this->getConnection(), $query)) {
		$messgae = "Movie added Successfully.";
		$status = 1;			
	} else {
		$messgae = "Movie added failed.";
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
		SELECT id, title, image 
		FROM Movie ";	
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