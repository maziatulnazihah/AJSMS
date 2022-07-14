<!DOCTYPE html>
<html>
<head>
<title>View Leave Application Request</title>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			
			.box{
			 width: 750px;
			 background-color: #fff;
			 color: #000;
			 height: auto;  
			 padding: 5px;
			 box-sizing: border-box;
			 font-size: 15px;	
			 text-align: center;		  
						
			}
			
			.box .button{
		     border: none;
			 background-color: #aaa;
			 color: #000;
			 padding: 9px 20px;
			 font-size: 14px;
			 cursor: pointer;
			 display: inline-block;
			 text-decoration: none;
		  
		}
		
		h3{
			font-size: 18px;
			font-Style: italic;
			color: green;
		}
		h1{
			font-size: 18px;
			font-Style: italic;
			color: green;
			float: right;
		}
		
		.box .rectangle {
		height: 78px;
		margin-left: -6px;
		margin-top: -10px;
		width: 750px;
		background-color: #000 ;
		}
		
		.box .rectangle h3{
	    font-style : italic
		font-size: 18px;
		color: #F6BB04;
		}
		
		#count{
		border-radius : 100px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}

			</style>
						
</head>

<body>
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
 
 
<center>
<br>
 <div class="box">
 <div class="rectangle"><br>
 <h3><center>FINANCE AND ADMIN DEPARTMENT</center></h3>
 </div>
 
<br><br>
 <table border= "1px">
			
				
 
		<table>
					<?php
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";
				//$username = $_session['username'];
				$id = $_GET['ID'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM leave_s WHERE id = $id"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){

						
						
					
						 echo "<tr><b>NAME:</b><br>".$row["name"]. "</tr><br><br>";
						 echo "<tr><b>DESIGNATION:</b><br>". $row["designation"]."</tr><br><br>";
						 echo "<tr><b>DEPARTMENT:</b><br>" .$row["dep"]. "</tr><br><br>";
						 echo "<tr><b>TYPE:</b><br>" .$row["type"]. "</tr><br><br>";
						 echo "<tr><b>ENTITLEMENT:</b><br>".$row["entitle"]."</tr><br><br>";
						 echo "<tr><b>NO. OF DAYS TAKEN:</b><br>".$row["dayst"]."</tr><br><br>";
						 echo "<tr><b>NO. OF DAYS APPLIED:</b><br>".$row["daysApp"]."</p></tr>";
						 echo "<tr><b>BALANCE:</b><br>".$row["bal"]."</tr><br><br>";
						 echo "<tr><b>FROM:</b><br>".$row["frm"]."</tr><br><br>";
						 echo "<tr><b>TO:</b><br>".$row["toD"]."</tr><br><br>";
						 echo "<tr><b>PURPOSE OF LEAVE:</b><br>".$row["purpose"]. "</tr><br><br>";
						 echo "<tr><b>STATUS:</b><br>".$row["status_leave"]."</p></tr>";
						
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>	
						
				</table>
				
				<center>
				
				<a href="http://localhost/ajpn/nlupdate.php#" button class="button">BACK</button></a>
			
				<a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL</button></a>
			</center>
			
			<br><br>
			</div>
		
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
		
 </body>
</html>