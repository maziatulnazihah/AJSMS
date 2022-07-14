<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



$s_id =$_POST['s_id'];
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
			else{ 
			echo "Success";
			}
			//insert
			if(isset($_POST['insert'])){

			$sql =  "INSERT INTO bankacc(s_id, name, des, dep, date, bankN, bankAcc, totalA, status) VALUES ('$s_id','$name','$des','$dep','$date','$bankN','$bankAcc','$totalA', '$status')";
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo'<script type="text/javascript">alert("Payroll Details successfully inserted !")</script>';
			?>
			<script type="text/javascript">
			window.location.href="bankL.php"</script>
			<?php
			}

			else
			{
			echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
			}
			}


			mysqli_close($conn);

?>
