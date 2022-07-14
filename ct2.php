<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mrb";	
			//$c_id = $_GET['ID'];
			$tips = $_POST['tips'];
			$description = $_POST['description'];
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "mrb");
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
	 $sql = "INSERT INTO tips(tips, description, photo) VALUES ('$tips','$description','$photo')";

$result=mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)>0){


	if(mysqli_query($conn,$sql)){
				echo "Record insert successfully !";
				header ("Location:http://localhost/tutorial/ct.php");
				
			}else{
				echo"Error inserting record:".mysqli_error($conn);
			}
			}
			 // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$photo);
			
			
			}
}
			
?>













































