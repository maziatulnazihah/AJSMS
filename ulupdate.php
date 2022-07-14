<?php
	

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajpn";	
			
			
			
			$s_id = $_GET['ID'];
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
			$status = $_POST ['status'];
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
		
			//sql to update a record
			$sql = "UPDATE leave_s SET name='$name', designation='$designation', dep='$dep', type='$type', entitle='$entitle', dayst='$dayst', daysA='$daysA', bal='$bal', frm='$frm', toD='$toD', daysApp='$daysApp', status='$status' WHERE s_id=$s_id";
			
		

			$result=mysqli_query($conn, $sql);
			
			if(mysqli_affected_rows($conn)>0){
				
				//echo "Record Update successfully !";
				header("Location: ulr.php");
				}
				else
				{
				echo"Error updating record:".mysqli_error($conn);
				}
			
			
  
			
			
?>