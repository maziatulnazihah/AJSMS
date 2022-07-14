<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Setting</title>
<style>

	body {
		  font-family: "Lato", sans-serif;
		  background-size: auto;
		  background-color: white;
		  height: auto;
		  margin:0;
		  font-size: 20px;
		  
		}
	  /*TOPNAV*/
		.topnav {
		  overflow: hidden;
		  background-color: #101727;
		  color: #eee;
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

		.box{
			width: 600px;
			height: auto;  
			padding: 50px;
			box-sizing: border-box;
			background: #fff ;
			font-size: 15px;
		}

		.button{
		border: none;
		  background-color: #FFAD00;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 16px;
		  cursor: pointer;
		  display: inline-block;
		  border-radius: 12px;
		  
		}

		h1{
			font-size: 30px;
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

		/* Main content */
		.main {
		  margin-left: 150px; /* Same as the width of the sidenav */
		  font-size: 20px; /* Increased text to enable scrolling */
		  padding: 0px 50px;
		}
		
		.main .box input[type="file"]{
			display: none;
			}
			

			
		.main .box h3{
			font-size: 15px;
            font-style: italic;
			color: blue;
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


</style>

</head>
<body>

		</style>
		<div class="topnav">
		  <a Href="http://localhost/ajpn/setting.php">Settings</a>
		  <a href="http://localhost/ajpn/contact.php#">Contact</a>
		  <a href="http://localhost/ajpn/about.php#">About</a>
		</div>
		
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
		
		<form action="bankupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype="multipart/form-data">
		<div class="main"> 
 
			
	<center><div class="box">
	 <h1>Settings</h1>
	<center><table width ="450px">
			
					<tr>
						<td>Username:</td>
					    
						<td>
							<input type="text" name="uname" placeholder="Username" size="20">
						</td>
						<td>
							<i class="fa fa-pencil"></i><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> New Password:</td>
					    
						<td><br>
							<input type="text" name="pwd" placeholder="Password" size="20">
							
						</td>
						<td>
							 <a href="http://localhost/ajpn/sedit.php#"><i class="fa fa-pencil"></i><br>
							
						</td>
						
					</tr>
					
				</table></center>
			
			

			<br>
			<center>		
				<input type="submit" class="button" name="insert" value="SAVE">
		
				
				<a href="http://localhost/ajpn/homepagehr.php"><input type="button" class="button" value="CANCEL"></a>
			</center>
	</form>
</div></center>

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
		
		
</form>
</body>
</html> 