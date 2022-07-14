<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$r_id=$_POST['r_id'];
$user=$_POST['user'];
$pass = $_POST['pass'];
$email=$_POST['email'];
$no_p = $_POST['no_p'];
$usertype=$_POST['usertype'];




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

			$sql =  "INSERT INTO `multiuserlogin`(r_id, username, password, email, no_p, usertype) VALUES ('$r_id', '$user','$pass','$email','$no_p','$usertype')";
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "<script type='text/javascript'>alert('Your details successfully inserted !');</script>";
			header ("Location:http://localhost/ajpn/Login_HR.php");
			}

			else
			{
			echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
			}
			}


			mysqli_close($conn);

?>