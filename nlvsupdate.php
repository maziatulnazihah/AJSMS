<?php
	

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajpn";	
			
		
			
			$id = $_GET['ID'];
			$name = $_POST['name'];
			$designation = $_POST ['designation'];
			$dep = $_POST ['dep'];
			$dayst = $_POST ['dayst'];
			$bal = $_POST ['bal'];
			$frm = $_POST ['frm'];
			$toD = $_POST ['toD'];
			$daysApp = $_POST ['daysApp'];
			$purpose = $_POST['purpose'];
			$status_leave=$_POST['status_leave'];
		
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE leave_s SET name='$name',designation ='$designation', dep='$dep', dayst='$dayst', bal='$bal', frm='$frm', toD='$toD', daysApp='$daysApp', purpose='$purpose', status_leave='$status_leave'WHERE id=$id";

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
				echo'<script type="text/javascript">alert("Leave application request already updated !")</script>';
			?>
			<script type="text/javascript">
			window.location.href="nlupdate.php"</script>
			<?php
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>