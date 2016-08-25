<?php
$servername = "localhost";
$username = "root";
$password = "sumesh";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";


$sql = "CREATE TABLE MYemployee (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP 
	)";

	if ($conn->query($sql) ===TRUE) {
		echo "Table MYemployee created succesfully";

	} else {
		echo "Error creating table : " . $conn->error;
	}

	$conn->close();
?>