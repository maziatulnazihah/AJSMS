<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Update Leave Application Request</title>

<?php
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
?>

 <?php
  
  $sql_get = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
  $count = mysqli_num_rows($sql_get);
  

  ?> 

<style>
		 		* {
  box-sizing: border-box;
 
}


body {
  font-family: Arial, Helvetica, sans-serif;
  height: auto;
  margin:0;
   background-color: #f2f2f2;
  
	
  
}

h1{
	font-size: 23px;
	font-style : italic;
}

.navbar {
  overflow: hidden;
  background-color: #000;
  margin: 0;
  
}

		.navbar a {
		  float: left;
		  font-size: 16px;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;

		 
		}

		.dropdown {
		  float: left;
		  overflow: hidden;
		}

		.dropdown .dropbtn {
		  font-size: 16px;  
		  border: none;
		  outline: none;
		  color: white;
		  padding: 14px 16px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}

		.navbar a:hover, .dropdown:hover .dropbtn {
		 background-color: #FFCC00 ;
  color: #000;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  float: none;
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {
		  background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
		  display: block;
		}

		.main .table{
	    border-collapse: collapse;
		width: 100%;
		border: 1px solid #ddd;
		}
		.main .table, th, td{
		border: 1px solid black;
		background-color :  #fff;
		border-collapse: collapse;
		color: #000;
		font-size: 14.5px;
		text-align: left;
        padding: 16px;
		}
		    
		.main .table, th{
		background-color: #111 ;
		color : #fff;
		}
		
		.main .table tr:nth-child(even) {
		background-color: #f2f2f2;
		}
			.main .button{
			 border: none;
		  background-color: #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
			}
			
			.main .btn1{
			border: 2px solid #000;
			background-color: #fff;
			color: #000;
			padding: 5px 8px ;
			font-size: 12px;
			cursor: pointer;
			display: inline-block;
			text-decoration: none;
			border-radius: 12px;
			}
			
			.main .btn2{
			border: none;
			color: white;
		    padding: 5px 6px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			text-decoration: none;
			}
			
			.main .btn3{
			border: none;
			color : white;
			padding: 5px 5px;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			text-decoration: none;
			border-radius: 12px;
			}
			
			#count{
		border-radius : 100px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}
				

</style>
		<div class="navbar">
  <a href="http://localhost/ajpn/homepagehod.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Leave Application Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nlupdate.php#">Update Leave Application Request</a>
    </div>
  </div> 
  
  <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge bg-secondary" id="count"><?php echo $count;?></span></a><i class="fa fa-caret-down"></i> 
	   <div class="dropdown-content">
	  <?php
				 $sql_get1 = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
				  if(mysqli_num_rows($sql_get1)>0)
				  {
					  while($result = mysqli_fetch_assoc($sql_get1))
					  {
						  echo '<a class="dropdown-item text-primary" href="read_leave.php?id='.$result['id'].'">'.$result['name'].'</a>';
						  echo '<div class="dropdown-divider"></div>'; 
					  }
					  
				  }
				  else{
					  echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><i class="fa fa-frown-o" aria-hidden="true"></i> Sorry ! No Message </a>';
				  }
			?>
    </div>
	</div>
	
  
   <li style="float:right"><a href="http://localhost/ajpn/Login_hr.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
</diV>

 <br><br>
<div class="main"> 

<center>

<center><div class="box">
 <h1><center>UPDATE LEAVE APPLICATION REQUEST</center></h1>
 <center><table border= "1px">
				
					<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";
				//$username = $_session['username'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
					
				$sql = "SELECT * FROM leave_s"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>NAME</th><th>DESIGNATION</th><th>DEPARTMENT</th><th>TYPE OF LEAVE</th><th>BALANCE</th><th>NO. OF DAYS APPLIED</th><th>ACTION</th><th>ACTION</th></tr>	";
				
				//echo "<tr><th>title</th><th>duration</th><th>serving</th><th>action</th></tr>	";
				
				if(mysqli_num_rows($result)>0){
				//output each row
				while($row = mysqli_fetch_assoc($result)){

						
							echo "<tr>";
							echo "<td>".$row["name"]; echo"</td>";
							echo "<td>".$row["designation"];echo "</td>";
							echo "<td>".$row["dep"]; echo "</td>";
							echo "<td>".$row["type"]; echo"</td>";
							echo "<td>".$row["bal"]; echo"</td>";
							echo "<td>".$row["daysApp"]; echo"</td>";
							
							
		
                            echo"<td><center><a href=\"nluv.php?ID=".$row["id"]."\" class= btn1>VIEW MORE</a></center></td>";
							echo"<td><center><a href=\"nluphp.php?ID=".$row["id"]."\" class = btn2><img src=edit.png style=width:20px;height:20px></a></center></td>";
							
							
							echo "</tr>";
						 
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
				?>
						
					
				
					
				</table></center>
				
			
				
				<center>
			<br>
				
				
				<a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL </button></a>
			</center>


</center></div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

		
</div>


 </body>
</html>
</body>
</html>