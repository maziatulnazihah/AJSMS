<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajpn";



//$s_id =$_POST['s_id'];
$photo = $_POST['file'];
$name=$_POST['name'];
$designation =$_POST['designation'];
$dep =$_POST['dep'];
$type =$_POST['type'];
$startD = $_POST['startD'];
$salary = $_POST['salary'];



// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			else{ 
			echo "Success";
			}
			
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			if(isset($_POST['insert'])){

			$photo = $_FILES['file']['name'];
			$target_dir = "image/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			  // Select file type
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			  // Valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");
			 // Check extension
			  if( in_array($imageFileType,$extensions_arr) ){
			 
			// Insert record
			$sql =  "INSERT INTO jobinfo(s_id, photo, name, designation, dep, type, startD, salary) VALUES ('$s_id','$photo', '$name', '$designation', '$dep', '$type', '$startD', '$salary')";
			
			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

				echo "Record insert successfully !";
				header ("Location:http://localhost/ajpn/jinfo2.php");
				
			}else{
				echo"Error inserting record:".mysqli_error($conn);
			}
			}
			 // Upload file
			move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$photo);
			
			}
			

			
?>

 
 
			

