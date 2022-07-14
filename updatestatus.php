<?php
	

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajpn";	
			
			
		<?php	
			$n_id = $_GET['ID'];
			$status =$_POST['status'];
		
			
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE message SET status=1 WHERE n_id=$n_id";

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
				//echo "Record Update successfully !";
				header("Location:read_msg.php");
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>