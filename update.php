<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mrb";	
			$r_id = $_GET['ID'];
			$categories = $_POST['categories'];
			$title = $_POST['title'];
			$ingredients = $_POST['ingredients'];
			$duration = $_POST['duration'];
			$steps = $_POST['steps'];
			$serving = $_POST['serving'];
			 //echo $title;
			
			$origin = $_POST['origin'];
			

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
 
			//sql to update a record
			$sql = "UPDATE mcr SET categories='$categories', title = '$title', ingredients='$ingredients', duration='$duration', steps='$steps', serving='$serving', photo='$photo', origin='$origin' WHERE r_id = $r_id";

			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "Record Update successfully !";
			header ("Location:http://localhost/tutorial/v1.php");
			}
			else
			{
			echo"Error updating record:".mysqli_error($conn);
			}

			}

  
			// Upload file
			move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$photo);


}
			
			
?>