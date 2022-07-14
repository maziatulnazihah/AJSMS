<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";

//$r_id =$_POST['r_id'];
$name =$_POST['name'];
$email =$_POST['email'];
$state =$_POST['state'];
$message =$_POST['message'];





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

			$sql =  "INSERT INTO contact(id, name, email, message) VALUES ('$id', '$name', '$email','$message')";
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo'<script type="text/javascript">alert("your message sent !")</script>';
			?>
			<script type="text/javascript">
			window.location.href="contact1.php"</script>
			<?php
			}

			else
			{
			echo "<script type='text/javascript'>alert('Error !');</script>";
			}
			}


			mysqli_close($conn);

?>