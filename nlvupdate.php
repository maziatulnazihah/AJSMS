?php
	

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajpn";	
			
		
			
			$s_id = $_GET['s_id'];
			$name = $_POST['name'];
			$designation = $_POST ['designation'];
			$dep = $_POST ['dep'];
			$type = $_POST ['type'];
			$entitle = $_POST ['entitle'];
			$dayst = $_POST ['dayst'];
			$daysA = $_POST ['daysA'];
			$bal = $_POST ['bal'];
			$frm = $_POST ['frm'];
			$toD = $_POST ['toD'];
			$daysApp = $_POST ['daysApp'];
			$purpose = $_POST['purpose'];
			$no_p = $_POST['no_p'];
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE bankacc SET name='$name', bankN='$bankN', bankAcc='$bankAcc', totalA='$totalA', status='$status' WHERE s_id=$s_id";

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
				//echo "Record Update successfully !";
				header("Location: bankL.php");
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>