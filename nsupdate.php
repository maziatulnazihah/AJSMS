<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$s_id =$_GET['ID'];
//$photo = $_POST['file'];
$name =$_POST['name'];
$age =$_POST['age'];
//$birthD =$_POST['birthD'];
//$gender = $_POST['gender'];
//$race = $_POST['race'];
$email = $_POST['email'];
$no_p = $_POST['no_p'];
$address = $_POST['address'];
$state = $_POST['state'];
$designation =$_POST['designation'];
$dep =$_POST['dep'];
//$type =$_POST['type'];
//$startD = $_POST['startD'];
$salary = $_POST['salary'];
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			if(isset($_POST['insert'])){
 
			//sql to update a record
			$sql = "UPDATE newstaff SET name='$name', age='$age', email='$email', no_p='$no_p', address='$address', state='$state', designation='$designation', dep='$dep',salary='$salary' WHERE s_id = $s_id";

echo $sql;
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "Record Update successfully !";
			header ("Location:http://localhost/ajpn/newsL.php");
			}
			else
			{
			echo"Error updating record:".mysqli_error($conn);
			}

			}

  
			
			
			
?>


