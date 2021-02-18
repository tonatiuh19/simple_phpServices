<?php
require_once('db_cnn/cnn.php');
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	$requestBody=file_get_contents('php://input');
	$params= json_decode($requestBody);
	$params = (array) $params;

	if ($params['givenname'] && $params['date'] && $params['email']) {
		$givenname = $params['givenname'];
		$email = $params['email'];

		$sql = "SELECT email FROM users WHERE email='".$email."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {

		
		} else {


		}
	}else{
		echo "Not valid Body Data";
	}
	
}else{
	echo "Not valid Data";
}

$conn->close();
?>