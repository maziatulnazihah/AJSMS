<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$s_id = $_GET['ID'];
//$photo = $_POST['file'];
$name = $_POST['name'];
$designation =$_POST['designation'];
$dep =$_POST['dep'];
$type =$_POST['type'];
$startD = $_POST['startD'];
$salary = $_POST['salary'];

			
// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			if(isset($_POST['insert'])){
		
			//sql to update a record
			$sql = "UPDATE jobinfo SET name='$name', designation='$designation', dep='$dep', type='$type', startD='$startD', salary='$salary' WHERE s_id = $s_id";

			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){


			header ("Location:http://localhost/ajpn/jinfo.php");
			}
			else
			{
			echo"Error updating record:".mysqli_error($conn);
			}

			}

  
		
			
  
			
	?>		