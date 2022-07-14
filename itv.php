<!DOCTYPE html>
<html>
<head>


<title>Sustainability/OSH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
			
  body {
  font-family: "Lato", sans-serif;
  background-size: auto;
  height: auto;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #101727;
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
  color:#FFA600 ;

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


	.box{
	width: 400px;
	height: auto;  
   padding: 50px;
   box-sizing: border-box;
   background: #99ABCE  ;
   font-size: 14px;	
  text-align: left;			 
			
}

.box .container {
font-size: 15px;
}

.box .container .button{
border: none;
background-color: black;
color: white;
padding: 9px 20px;
font-size: 16px;
cursor: pointer;
display: inline-block;
border-radius: 12px;
  
}

.main h1{
	font-size: 25px;
}
			

			</style>
						
</head>

<body>
<div class="sidenav">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn">Home <i class="fa fa-home"></i></a>
	</button>
 

	<button class="dropdown-btn">Staff Details <i class="fa fa-users"></i>
			<i class="fa fa-caret-down"></i>
	</button>
 
 <div class="dropdown-container">
    <a href="http://localhost/ajpn/nstaff.php#">New staff</a>
    <a href="http://localhost/ajpn/staffV.php#">Staff List</a>
    <a href="http://localhost/ajpn/dep.php#">Department</a>
	<a href="http://localhost/ajpn/searchs.php#">Search Department</a>
  </div>
  
  <a href="http://localhost/ajpn/leave_s.php#" button class="dropdown-btn">Leave Status <i class="fa fa-home"></i></a>
	</button>

 <button class="dropdown-btn">Payroll details <i class="fa fa-usd"></i>
	<i class="fa fa-caret-down"></i>
	</button>
	
 <div class="dropdown-container">
	<a href="http://localhost/ajpn/bankinfo.php#">New Payroll</a>
    <a href="http://localhost/ajpn/bankL.php#">Payroll List</a>
	<a href="http://localhost/ajpn/searchd.php#">Search Payroll</a>
  </div>
 
 </div>
 
 
<center>
 <div class="box">
 <h1><center>SUSTAINABILITY/OSH</center></h1>
 
 <br><br>
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
				$sql = "SELECT * FROM jobinfo WHERE dep = 'sustain'";
				
				$sql = "SELECT * FROM jobinfo WHERE s_id = $s_id"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						
						echo "<tr><div class = container><b>NAME:</b>".$row["name"]. "</tr><br><br>";
						 echo "<tr><div class = container><b>DESIGNATION:</b>". $row["designation"]."</tr><br><br>";
						 echo "<tr><div class = container><b>DEPARTMENT:</b>" .$row["dep"]. "</tr><br><br>";
						 echo "<tr><div class = container><b>TYPE:</b>" .$row["type"]. "</tr><br><br>";
						 echo "<tr><div class = container><b>START DATE:</b>" .$row["startD"]. "</tr><br><br>";
						 echo "<tr><div class = container><b>SALARY:</b>". $row["salary"]."</p></tr><br><br>";
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>	
				</table>
				
				<center>
			
				<a href="http://localhost/ajpn/it.php"><input type="button" class="button" value="BACK"></a>
	
				<a href="http://localhost/ajpn/homepagehr.php"><input type="button" class="button" value="CANCEL"></a>
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