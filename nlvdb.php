<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";


$id = $_POST['id'];
$name = $_POST['name'];
$designation = $_POST ['designation'];
$dep = $_POST ['dep'];
$type = $_POST ['type'];
$entitle = $_POST ['entitle'];
$dayst = $_POST ['dayst'];
$frm = $_POST ['frm'];
$toD = $_POST ['toD'];
$daysApp = $_POST['daysApp'];
$purpose = $_POST['purpose'];
$no_p = $_POST['no_P'];
$balance = 0;

echo $entitle;

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

			$query = "SELECT * FROM leave_s WHERE id = $id";
			$statement= mysqli_query($conn, $query);
			
			if ($statement->num_rows > 0) {
            // output data of each row
			  while($row = $statement->fetch_assoc()) {
				//echo "<br> id: ". $row["s_id"]. " - Balance days: ". $row["bal"]. "<br>";
				$balance = $row["bal"];
				
			  }
			} else {
			  	$balance = $entitle - $daysApp - $dayst;
				$sql =  "INSERT INTO leave_s(id, name, designation, dep, type, entitle, bal, dayst, frm, toD, daysApp, purpose) 
			                  VALUES ('$id', '$name', '$designation', '$dep', '$type', '$entitle','$balance', '$dayst','$frm', '$toD', '$daysApp', '$purpose')";
			$result=mysqli_query($conn, $sql);
			if(mysqli_affected_rows($conn)>0){
				echo'<script type="text/javascript">alert("Your leave application request successfully sent !")</script>';
			?>
			<script type="text/javascript">
			window.location.href="nlvL.php"</script>
			<?php
			}else{
				echo"Error inserting record:".mysqli_error($conn);
			}
			}
			if ($balance > 0){
				echo $balance;
				$balance = $balance - $daysApp - $dayst;
				$sql = "UPDATE leave_s SET bal = '$balance', daysApp='$daysApp' WHERE s_id=$s_id";
				if (mysqli_query($conn, $sql)) {
				  echo "Record updated successfully";
				  header ("Location:http://localhost/ajpn/nlvL.php");
				} else {
				  echo "Error updating record: " . mysqli_error($conn);
				}
			}
			else
			{
				echo "No balance left";
			}
			}
				mysqli_close($conn);
			
			

			
?>
