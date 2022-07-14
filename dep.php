<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Department</title>
			<style>
 		 		* {
		  box-sizing: border-box;
		}


		body {
		  font-family: Roboto, sans-serif;
		  font-weight: 500;
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
		/* Main content */
		
		.main .btn{
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
		.main .btn-group .button {
		  font-weight: bold;
		  background-color:  #FFA601 ;
		  border-radius: 12px;
		  border: 1px solid #FFA601 ;
		  color: #000;
		  padding:15px;
		  text-align: center;
		  text-decoration: none;
		  font-size: 16px;
		  cursor: pointer;
		  width: 45%;
		  display: block;
		}

		  .main .btn-group .button:not(:last-child) {
		  border-bottom: none; /* Prevent double borders */
		}

		.main .btn-group .button:hover {
		  font-weight: bold;
		  background-color: #222;
		  border: 1px solid #222;
		  color: #FFA601 ;
		  
		}
		
		.main h2{
			font-style: italic;
			font-size: 23px;
		}

	
</style>

<div class="navbar">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
 
  <div class="dropdown">
    <button class="dropbtn">Staff Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
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
						echo '<a href="setting.php?ID='.$id_user.'" li style="float:right"><i class="fa fa-cog" aria-hidden="true"></i></a>';
					
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

  
</div>
		 <div class="main"> 
		 
	<center><h2>DEPARTMENT</h2></center>
	<center>
<div class="btn-group">
  <a href="http://localhost/ajpn/faa.php" button class="button">FINANCE AND ADMIN DEPARTMENT</a></button><br>
  <a href="http://localhost/ajpn/es.php" button class="button">ESTATE & SUSTAINABILITY/OSH DEPARTMENT</a></button><br>
  <a href="http://localhost/ajpn/commercial.php" button class="button">COMMERCIAL DEPARTMENT</a></button><br>
  <a href="http://localhost/ajpn/pom.php" button class="button">PALM OIL MILL (POM)</a></button><br>
  <a href="http://localhost/ajpn/cle.php" button class="button">CLAIRE ESTATE (CLE)</a></button><br>
  <a href="http://localhost/ajpn/jle.php" button class="button">JOHORE LABIS ESTATE (JLE)</a></button><br>
  <a href="http://localhost/ajpn/sge.php" button class="button">SUNGEI GERCHANG (SGE)</a></button><br>
</div>

<br>
	
		<a href="http://localhost/ajpn/homepagehr.php" button class="btn">CANCEL </button></a>
	<br>
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
  
  
