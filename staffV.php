
<!DOCTYPE html>
<html>
<head>
<title>Staff List </title>
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
		  background-color: #F1C40F ;
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

		/* Main content */
		.main .personald {
		  color:  #000;
		  background-color:  #FFBD00  ;
		  text-decoration: none;
		  padding: 20px;
		  font-size: 15px;
		}


		.main .ji {
		  color:  #000;
		  background-color:  #FFBD00  ;
		  text-decoration: none;
		  padding: 20px;
		  font-size: 15px;
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
		
		.main .button:hover{
			background-color: #000;
			color: #fff;
		}


		.main .container{
			max-width:600px;
			margin:80px;
			font-family:Verdana;
		}

		.main .month{
			text-align:center;
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(fee.jpg);
			font-size:2.5em;
			letter-spacing:1px;
			color:white;
			padding:30px;
			border:3px solid white;
			
		}

		table, th, td{
			width: 100%;
			table-layout:fixed;
			text-align:center;
			font-size:17px;
			border-collapse:collapse;
			border:3px solid white;
		}

		tr, th, td{
			padding:15px;
		}

		th{
			background: #1FAA66 ;
			color:white;
		}

		td{
			background:#AFFDD7 ;
		}

		td:hover{
			background:#D4E6F1;
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
      <a href="http://localhost/ajpn/nstaff.php#">New staff</a>
	  <a href="http://localhost/ajpn/staffV.php#">Staff List</a>
	  <a href="http://localhost/ajpn/dep.php#">Department</a>
	  <a href="http://localhost/ajpn/searchs.php#">Search Department</a>
    </div>
  </div> 
  
<a href="http://localhost/ajpn/leave_s.php#" button class="dropdown-btn">Leave Status </a>
  
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
 
 <div class="main"> 
	<center>
<br><br><br><br><br><br><br><br><br>

	<a href="http://localhost/ajpn/staffL.php" class="btn personald">PERSONAL DETAILS</a>
	
<br><br><br><br><br><br>
	<a href="http://localhost/ajpn/jinfo.php" class="btn ji">JOB INFORMATION</a>
	

<br><br><br>
	<br>
			<center>
			<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL </button></a>
			</center>
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