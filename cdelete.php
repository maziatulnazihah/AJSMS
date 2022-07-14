<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";	
$id = $_GET['ID'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "ajpn");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql to delete a record
$sql = "DELETE FROM contact WHERE id = $id";

if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully !";
	header ("Location:http://localhost/ajpn/contactlist.php");
	
}else{
	echo"Error deleting record:".mysqli_error($conn);
}
