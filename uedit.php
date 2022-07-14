	<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$s_id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM leave_s WHERE s_id= $s_id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Leave Request</title>
			<style>
	
	
	body {
		  font-family: "Lato", sans-serif;
		  background-size: auto;
		  background-color: white;
		  height: auto;
		  margin:0;
		  font-size: 20px;
		  
	}

		.box{
			width: 600px;
			height: auto;  
			padding: 0px;
			box-sizing: border-box;
			background: #fff;
			font-size: 14px;
		}

		.button{
		border: none;
		  background-color: black;
		  color: white;
		  padding: 9px 20px;
		  font-size: 16px;
		  cursor: pointer;
		  display: inline-block;
		  border-radius: 12px;
		  text-decoration: none;
		  
		}

		h1{
			font-size: 25px;
		}


		/* Main content */
		.main {
		  margin-left: 150px; /* Same as the width of the sidenav */
		  font-size: 20px; /* Increased text to enable scrolling */
		  padding: 0px 50px;
		}
		
		.main .box input[type="file"]{
			display: none;
			}
			

			
		.main .box1 h3{
			font-size: 12px;
            font-style: italic;
			color: black;
			float: left;
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

		.active {
		  background-color: #5DADE2 ;
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


<div class="topnav">
		  <a Href="#">Log Out</a>
		 
		</div>
		
		<div class="sidenav">
			  <a href="#" button class="dropdown-btn">Home <i class="fa fa-home"></i></a>
				</button>
			 

				<button class="dropdown-btn">Leave Request</center>
						<i class="fa fa-caret-down"></i>
				</button>
			 
			 <div class="dropdown-container">
				<a href="#">Update</a>
				
			  </div>
		</div>


<form action="ulupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype="multipart/form-data">
<center><br>
<div class="main"> 
 
	 
	 
	<div class ="box">
	<h1>New Leave Application</h1>
	<table width ="450px">
			
					<tr>
						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="25" value="<?php echo $row['name'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="designation" placeholder="Designation" size="20" value="<?php echo $row['designation'];?>"><br>
							
						</td>
						
					</tr>
				
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" name="dep" placeholder="State" value="<?php echo $row['dep'];?>">
									<option value="Estate">Estate Department</option>
									<option value="Finance and Admin">Finance and Admin Department</option>
									<option value="sustain">Sustainability/OSH</option>
									<option value="Commercial">Commercial Department</option>
									<option value="JLE">Johor Labis Estate</option>
									<option value="SGE">Sungei Gerchang Estate</option>
							</select>
							
						</td>
						
					</tr>
				
					<tr>

						<td><br>Type of Leave:</td>
					    
						<td>
							<br><select input="input-field" name="type" placeholder="type" value="<?php echo $row['type'];?>">
									<option value="Annual">Annual</option>
									<option value="Casual">Casual</option>
									<option value="medic">Medical</option>
									<option value="matri">Matrimonial (2 Days)</option>
									<option value="compassion">Compassionate (2 working days)</option>
									<option value="others">Others</option> 
							
						</select>
							
						</td>
						
					</tr>
					
					
					<tr>
						<td><br>Entitlement:</td>
					    
						<td>
							<br><input type="text" name="entitle" placeholder="Entitlement" size="25" value="<?php echo $row['entitle'];?>"><br>
							
						</td>
						
					</tr>
					<tr>
						<td><br>No.of days taken:</td>
					    
						<td>
							<br><input type="text" name="dayst" placeholder="No.of days taken" size="25" value="<?php echo $row['dayst'];?>"><br>
							
						</td>
						
					</tr>
					
					
					
					
					<tr>
						<td><br>No. of days available:</td>
					    
						<td>
							<br><input type="text" name="daysA" placeholder="No. of days available" size="25" value="<?php echo $row['daysA'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br>Balance:</td>
					    
						<td>
							<br><input type="text" name="bal" placeholder="Balance" size="25" value="<?php echo $row['bal'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> From: </td>
					    
						<td><br><input type="date" id="frm" name="frm" value="<?php echo $row['frm'];?>">
							
							
						</td>
						
					</tr>
					<tr>
						<td><br> To: </td>
					    
						<td><br><input type="date" id="toD" name="toD" value="<?php echo $row['toD'];?>">
							
							
						</td>
						
					</tr>
					<tr>
						<td><br>No. of days applied:</td>
					    
						<td>
							<br><input type="text" name="daysApp" placeholder="No. of days applied" size="25" value="<?php echo $row['daysApp'];?>"><br>
							
						</td>
						
					</tr>
				
				

				</table>
			
			

			<br>
			<center>		
			
			   	<input type="submit" class="button" name="insert" value="SAVE">
				
					<a href="http://localhost/ajpn/ulr.php" button class="button">BACK</button></a>
				
				<a href="http://localhost/ajpn/homepagehod.php" button class="button"><i class="fa fa-times"></i></button></a>
			</center>
	</form>
	
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