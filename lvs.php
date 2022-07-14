<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<title>Commercial</title>
			<style>
			
			*{
			margin: 0;
			padding: 0;
			font-family: verdana;
			color:white;
			}


		
			.button{
			border: none;
			background-color: #BAC5FC;
			color: black;
			padding: 9px 23px;
			font-size: 16px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			}
			
		    .box{
			 width: 1000px;
			 height: auto;  
             padding: 50px;
             box-sizing: border-box;
			 background: #0D1121 ;
			 
		    }
			
			.box .table, th, td{
			border: 1px solid white;
			border-collapse: collapse;
			}
			
			.btn1{
			border: none;
			background-color: red;
			color: black;
		    padding: 5px 8px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
		
	
			}
			
			.btn2{
			border: none;
			background-color: green;
			color: black;
		    padding: 5px 5px;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			font-style: none;
			}
			

			</style>
						
</head>

<body>

 
<center>
<br><br> <br><br>
 <div class="box">
 <h1><center>COMMERCIAL</center></h1>
 
 <br><br>
 
 <table border= "1px">
 				

			<table>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";
				//$username = $_session['username'];
				$s_id = $_GET['ID'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM leave_s WHERE s_id = $s_id";
				
				$result = mysqli_query($conn,$sql);
				
				
				
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
						
						
						 echo "<tr><img src=".$image_src." width='150' height='150' ></tr><br><br><br><br>";
						 echo "<tr><b>". $row["s_id"]."</b></tr><br><br>";
						 echo "<tr><b>NAME:</b><br>".$row["name"]. "</tr><br><br>";
						 echo "<tr><b>STATUS:</b><br>". $row["status"]."</p></tr><br>";
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>	
				</table>
				
				<br><br>
				<a href="http://localhost/ajpn/leave_s.php#"><input type="button" class="btn" value="BACK"></a>
				<a href="http://localhost/ajpn/homepagehr.php#"><input type="button" class="btn" value="CANCEL"></a>
		</div>
		</center>
		</header>
		
	</body>
</html>