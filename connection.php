<?php
// $host_name = 'localhost';
// $usr_name = 'root';
// $password = '';
// $db_name = 'clinical_db_test';

// $conn = mysqli_connect($host_name,$usr_name,$password,$db_name);


// $conn = new mysqli(getenv('localhost'), getenv('root'), getenv('Clinical@015'), getenv('clinical_db_test'));
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connection Successful!";

$conn = mysqli_connect('localhost','root','Clinical@015','clinical_db_test');
 ?>