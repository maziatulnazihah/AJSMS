<?php
	

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajpn";	
			
			
			
			$s_id = $_GET['ID'];
			$name =$_POST['name'];
			$des =$_POST['des'];
			$dep =$_POST['dep'];
			$date =$_POST['date'];
			$bankN =$_POST['bankN'];
			$bankAcc =$_POST['bankAcc'];
			$totalA = $_POST['totalA'];
			$status = $_POST['status'];
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE bankacc SET name='$name',des='$des',dep='$dep', date='$date', bankN='$bankN', bankAcc='$bankAcc', totalA='$totalA', status='$status' WHERE s_id=$s_id";

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
			echo'<script type="text/javascript">alert("Payroll Details successfully updated !")</script>';
			?>
			<script type="text/javascript">
			window.location.href="bankL.php"</script>
			<?php
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>