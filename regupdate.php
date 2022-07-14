<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$r_id = $_GET['ID'];
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];

			
// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE `multiuserlogin` SET username='$user',password='$pass',usertype='$usertype' WHERE r_id=$r_id";

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
				//echo "Record Update successfully !";
				echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
				?>
				<script type="text/javascript">
				window.location.href="homepagehr.php"</script>
				<?php
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>