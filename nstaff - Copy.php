
<!DOCTYPE html>
<html>
<head>
<title>New Staff</title>
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

/* Main content */
.main .personald {
  color:  #ff851d ;
  background-color: #171f32;
  text-decoration: none;
  padding: 20px;
  font-size: 18px;
}

.main .personald:hover {
  background-color:  #cccfd3 ;
  color: black ;
  
}


.main .ji {
  color: #ff851d ;
  background-color:  #171f32;
  text-decoration: none;
  padding: 20px;
   font-size: 18px;
}

.main .ji:hover {
background-color:  #cccfd3 ;
  color: black ;
}


.main .bi {
  color: #ff851d;
  background-color: #171f32;
  text-decoration: none;
  padding: 20px;
   font-size: 18px;
}

.main .bi:hover {
background-color:  #cccfd3 ;
  color: black ;
}


.main .button{
	border: none;
  background-color: black;
  color: white;
  padding: 9px 20px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  border-radius: 12px;
}
.main {
  margin-left: 150px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 50px;
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
		
		
/*topbar*/
.main ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.main li {
  float: left;
}

.main li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.main li a:hover {
  background-color: #111;
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

<div class="main"> 
	<center>
<br><br><br><br><br><br><br><br><br>

	<a href="http://localhost/ajpn/personalDe.php" class="btn personald">PERSONAL DETAILS</a>
	<a href="http://localhost/ajpn/ji.php" class="btn ji">JOB INFORMATION</a>


<br><br><br>
	<br>
			<center>
				<a href="http://localhost/ajpn/homepagehr.php"><input type="button" class="button" value="BACK"></a>
			</center>
			
	<br><br><br><br><br><br>
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