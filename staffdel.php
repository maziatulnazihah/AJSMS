<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";	
$s_id = $_GET['ID'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "ajpn");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql to delete a record
$sql = "DELETE FROM newstaff WHERE s_id = $s_id";

if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully !";
	header ("Location:http://localhost/ajpn/staffinfo.php");
	
}else{
	echo"Error deleting record:".mysqli_error($conn);
}
