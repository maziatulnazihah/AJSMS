<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$s_id =$_POST['s_id'];
$name =$_POST['name'];
$age =$_POST['age'];
$gender = $_POST['gender'];
$race = $_POST['race'];
$email = $_POST['email'];
$no_p = $_POST['no_p'];
$address = $_POST['address'];
$des =$_POST['des'];
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
			else{ 
			echo "Success";
			}
			//insert
			if(isset($_POST['insert'])){

			$sql =  "INSERT INTO staffinfo(s_id, name, age, gender, race, email, no_p, address, des, dep, type, startD, salary) VALUES ('$s_id', '$name', '$age', '$gender', '$race', '$email', '$no_p', '$address', '$des', '$dep','$type', '$startD', '$salary')";
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
			header ("Location:http://localhost/ajpn/newsL.php");
			}

			else
			{
			echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
			}
			}


			mysqli_close($conn);

?>
