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

/*$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
  */

/*$sql = "CREATE TABLE MYemployee (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP 
	)";
	*/

$sql = "INSERT INTO MYemployee (firstname, lastname, email) VALUES ('neo', 'jenny', 'jenny@gmail.com')";

	if ($conn->query($sql) ===TRUE) {
		$last_id =$conn->insert_id;
		//echo "Table MYemployee created succesfully";
		echo "New record created succesfully, Last inserted id is", $last_id ;

	} else {
		echo "Error creating table : " . $conn->error;
	}

	$conn->close();
?>