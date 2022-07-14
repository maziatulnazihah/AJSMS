<!DOCTYPE html>
<html>
<head>


<title>Finance and Admin Department</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
			  background-color: #333;
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
				 width: 700px;
				 height: auto;  
			     padding: 5px;
			     box-sizing: border-box;
			     font-size: 15px;	
			     text-align: center;
				 border-style: solid;
				 border-width: 1px;			  
						
			}

			.box .container {
			font-size: 15px;
			text-align: center;
			}
			
			.box .container .button{
		   border: none;
		  background-color: #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
		  
		}
		h1{
			font-size: 18px;
			font-Style: italic;
		}

		

			</style>
						
</head>

<body>

<div class="navbar">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn">Home</a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Staff Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nstaff.php#">Add New Staff Details</a>
	  <a href="http://localhost/ajpn/nstaffD.php#">New Staff Details</a>
	  <a href="http://localhost/ajpn/staffinfo.php#">AJPN Staff List</a>
	  <a href="http://localhost/ajpn/dep.php#">Department</a>
	  <a href="http://localhost/ajpn/searchs.php#">Search Department</a>
    </div>
  </div> 
  
<a href="http://localhost/ajpn/leave_s.php#" button class="dropdown-btn">Leave Application Request</a>
  
  <div class="dropdown">
    <button class="dropbtn">Payroll Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="http://localhost/ajpn/bankinfo.php#">New Payroll</a>
				<a href="http://localhost/ajpn/bankL.php#">Payroll List</a>
				<a href="http://localhost/ajpn/searchd.php#">Search Payroll</a>
    </div>
  </div> 
  
  
<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";
				$id_user ='';
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
					
				$sql = "SELECT * FROM multiuserlogin";
				$result = mysqli_query($conn,$sql);
					
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
				
							$id_user = $row["r_id"];
							
						} 
						echo "<a href=\"setting.php?ID=".$id_user."\">Settings</a></center>";
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

  
</div>
 
 
<center>
<br>
 <div class="box">
 <h1><center>FINANCE AND ADMIN</center></h1>
 <div class = "container">
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
				$sql = "SELECT * FROM newstaff";
				
				$sql = "SELECT * FROM newstaff WHERE s_id = $s_id"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
						
						
						 echo "<tr><center><img src=".$image_src." width='250' height='250'></center></tr><br>";
						 echo "<tr><b>NAME:</b></tr><br>";
						 echo "<tr>".$row["name"]. "</tr><br><br>";
						 echo "<tr><b>AGE:</b></tr><br>";
						 echo "<tr>".$row["age"]. "</tr><br><br>";
						 echo "<tr><b>BIRTH DATE:</b></tr><br>";
						 echo "<tr>".$row["birthD"]. "</tr><br><br>";
						 echo "<tr><b>GENDER:</b></tr><br>";
						 echo "<tr>".$row["gender"]. "</tr><br><br>";
						 echo "<tr><b>RACE:</b></tr><br>";
						 echo "<tr>".$row["race"]. "</tr><br><br>";
						 echo "<tr><b>EMAIL:</b></tr><br>";
						 echo "<tr>".$row["email"]. "</tr><br><br>";
						 echo "<tr><b>PHONE NUMBER:</b></tr><br>";
						 echo "<tr>".$row["no_p"]. "</tr><br><br>";
						 echo "<tr><b>ADDRESS:</b></tr><br>";
						 echo "<tr>".$row["address"]. "</tr><br><br>";
						 echo "<tr><b>STATE:</b></tr><br>";
						 echo "<tr>".$row["state"]. "</tr><br><br>";
						 echo "<tr><b>DESIGNATION:</b></tr><br>";
						 echo "<tr>". $row["designation"]."</tr><br><br>";
						 echo "<tr><b>DEPARTMENT:</b></tr><br>";
						 echo "<tr>".$row["dep"]. "</tr><br><br>";
						 echo "<tr><b>TYPE:</b></tr><br>";
						 echo "<tr>".$row["type"]. "</tr><br><br>";						 
						 echo "<tr><b>START DATE:</b></tr><br>";
						 echo "<tr>".$row["startD"]. "</tr><br><br>";						
						 echo "<tr><b>SALARY:</b></tr><br>";
						 echo "<tr>".$row["salary"]. "</tr><br>";
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>	
				</table>
				
				<center>
			
				<a href="http://localhost/ajpn/nstaffD.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL </button></a>
				</center>
				</div>
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