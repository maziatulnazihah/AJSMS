<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Update Leave Request</title>
			<style>
			body {
		  font-family: "Lato", sans-serif;
		  background-size: auto;
		  background-color: white;
		  height: auto;
		  overflow: hidden; 
		  margin:0;
		  color: white;
		  font-size: 20px;
		  
		}
		
		/* Main content */
			.main {
			  margin-left: 150px; /* Same as the width of the sidenav */
			  font-size: 20px; /* Increased text to enable scrolling */
			  padding: 0px 30px;
			}

			.main .box{
			 width: 970px;
			 height: auto;
             padding: 2px;
             box-sizing: border-box;
			 background: #fff;
			 color: #000;
			 float: right;
		
			 
		    }
			
			.main .box h1{
				font-size: 18px;
				color: #000;
			
				
			}
			
			.main .box .table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			color: black;
			font-size: 14px;
			
			}
		    
			
			.main .button{
			border: none;
			background-color: #00123F ;;
			color: white;
			padding: 9px 23px;
			font-size: 16px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			}
			
				.main .btn1{
			border: none;
			background-color: green;
			color: white;
		    padding: 5px 15px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			text-decoration: none;
			}
			
			.main .btn2{
			border: none;
			background-color: red;
			color: white;
		    padding: 5px 6px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			text-decoration: none;
			}
			
		
		/*TOPNAV*/
		.topnav {
		  overflow: hidden;
		  background-color:  #002130 ;
		}

		.topnav a {
		  float: right;
		  color: #eee;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}
		
		/* Fixed sidenav, full height */
		.sidenav {
		  height: 100%;
		  width: 220px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color:  #002130 ;
		  overflow-x: hidden;
		  padding-top: 20px;
		  
		}

		/* Style the sidenav links and the dropdown button */
		.sidenav a, .dropdown-btn {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 20px;
		  color: white;
		  display: block;
		  border: none;
		  background: none;
		  width: 100%;
		  text-align: left;
		  cursor: pointer;
		  outline: none;
		}

		/* On mouse-over */
		.sidenav a:hover, .dropdown-btn:hover {
		  color: #FFA200 ;

		}

		/* Add an active class to the active dropdown button */
		.active {
		  background-color:#1d2638;
		  color: white;
		}

		/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
		.dropdown-container {
		  display: none;
		  background-color:#263147;
		  color: black;
		  padding-left: 8px;

		}
		
		/* Add an active class to the active dropdown button */
		.active {
		  background-color:#002A3E ;
		  color: white;
		}

		/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
		.dropdown-container {
		  display: none;
		  background-color:#003955 ;
		  color: black;
		  padding-left: 8px;

		}

		/* Optional: Style the caret down icon */
		.fa-caret-down {
		  float: right;
		  padding-right: 8px;
		}

		/* Some media queries for responsiveness */
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {
		   font-size: 18px;
		}
		
		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}
			</style>
						
</head>

<body>

<div class="topnav">
		  <a Href="#">Log Out</a>
		 
		</div>
		
		<div class="sidenav">
			  <a href="http://localhost/ajpn/homepagehod.php#" button class="dropdown-btn">Home <i class="fa fa-home"></i></a>
				</button>
			 

				<button class="dropdown-btn">Leave Request</center>
						<i class="fa fa-caret-down"></i>
				</button>
			 
			 <div class="dropdown-container">
				<a href="http://localhost/ajpn/ulr.php#">Update</a>
				
			  </div>
		</div>
		
		<div class="main"> 

<center>

<center><div class="box">
 <h1><center>LEAVE APPLICATION LIST</center></h1>
 <center><table border= "1px" size="450px">
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
				
				echo "<tr><th>STAFF ID</th><th>NAME</th><th>DESIGNATION</th><th>DEPARTMENT</th><th>TYPE OF LEAVE</th><th>ENTITLEMENT</th><th>NO.OF DAYS TAKEN</th><th>NO.OF DAYS AVAILABLE</th><th>BALANCE</th><th>FROM</th><th>TO</th><th>NO.OF DAYS APPLIED</th><th>ACTION</th></tr>	";
				
				//echo "<tr><th>title</th><th>duration</th><th>serving</th><th>action</th></tr>	";
				
				if(mysqli_num_rows($result)>0){
				//output each row
				while($row = mysqli_fetch_assoc($result)){

						
							echo "<tr>";
						    echo "<td>".$row["s_id"]; echo"</td>";
							echo "<td>".$row["name"]; echo"</td>";
							echo "<td>".$row["designation"];echo "</td>";
							echo "<td>".$row["dep"]; echo "</td>";
							echo "<td>".$row["type"]; echo"</td>";
							echo "<td>".$row["entitle"]; echo"</td>";
							echo "<td>".$row["dayst"]; echo"</td>";
							echo "<td>".$row["daysA"]; echo"</td>";
							echo "<td>".$row["bal"]; echo "</td>";
							echo "<td>".$row["frm"]; echo"</td>";
							echo "<td>".$row["toD"]; echo"</td>";
							echo "<td>".$row["daysApp"]; echo"</td>";
							
							echo"<td><center><a href=\"uedit.php?ID=".$row["s_id"]."\" class = btn1>Edit</a></center><br>";
							echo"<center><a href=\"udelete.php?ID=".$row["s_id"]."\" class= btn2>Delete</a></center></td>";
							
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
				
				
				<a href="http://localhost/ajpn/homepagestaff.php" button class="button"><i class="fa fa-times"></i></button></a>
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
			
 </body>
</html>