<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Homepage</title>
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
	font-size: 20px;
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


.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}


.about-section {
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)), url(34.jpg);
  padding: 100px;
  text-align: center;
  color: #fff;
}

.div2 {
  width: 100%;
  height: 100px;  
  padding: 40px;
  text-align: center;
  color: #F1C40F ;
}

.div2 .button{
	      color:  #000;
		  background-color:  #FFB100 ;
		  text-decoration: none;
		  padding: 15px;
		  font-size: 15px;
		  margin: 20px;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 45%;
  padding: 10px;
  height: 280px; /* Should be removed. Only for demonstration */
  margin: 15px;
  margin-right: 30px;
  margin-left: 30px;
  color: #FFF;
}

.column h2{
	color: #FFA200 ;
}
.column p{
	font-style: italic;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.div2{
	float : left;
}




</style>
						
</head>

<body>
  
<div class="navbar">
  <a href="http://localhost/ajpn/homepagestaff.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Leave Application Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nlvstest.php#">New</a>
	  <a href="http://localhost/ajpn/nlvL.php#">Leave Application Request List</a>
	  <a href="http://localhost/ajpn/leaveview.php#">View Leave Application Request</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Payroll Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="http://localhost/ajpn/payrolls.php#">Search</a>
	 <a href="http://localhost/ajpn/indexback.php#">Download Payslip</a>
  </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Staff Information
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/news.php#">New</a>
	  <a href="http://localhost/ajpn/newsL.php##">Staff Information List</a>
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
						echo '<a href="setting1.php?ID='.$id_user.'" li style="float:right"><i class="fa fa-cog" aria-hidden="true"></i></a>';
					
						
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

</diV>

<br>
<center><img src="AJlogo.jpg" style="width:8%"></center>
<br>
<h1><center>ACHI JAYA PLANTATIONS STAFF MANAGEMENT SYSTEM (AJMS)</center></h1>

<br>
<div class="about-section">
  <h1>Welcome to Achi Jaya Plantations Staff Management System (AJSMS)</h1>
  <p>AJPN Staff Management System or AJSMS is a system that created and developed to assist the Human Resource Department (HR) and it can be accessed by AJPN Staff and Head of Department (HOD).  AJSMS strictly to be used by Achi Jaya Plantations Sdn Bhd only.</p>
</div>

<div class="row">
  <div class="column" style="background-color:#4C4C4C ;">
    <center><h2>COOPERATE OFFICE, CHAAH</h2></center>
    <p><i class="fa fa-building"></i>        Lot 677, Jalan Factory, 85400 Chaah, Johor Darul Takzim</p>
	<p><i class="fa fa-phone"></i>  07-9263 810</p>
	<p><i class="fa fa-fax"></i> 07-9263 828</p>
	<p><i class="fa fa-envelope-o"></i> corporate_chaah@ajplantations.com.my</p>
  </div>
   <div class="column" style="background-color:#4C4C4C;">
    <center><h2>ACHI JAYA PLANTATIONS, KUALA LUMPUR</h2></center>
    <p><i class="fa fa-building"></i> Level 25, Tower 1, Etiqa Twins, No. 11, Jalan Pinang,50450 Kuala Lumpur</p>
	<p><i class="fa fa-phone"></i> Tel. No : 03-2164 9866</p>
	<p><i class="fa fa-fax"></i> Fax. No :  03-2164 0688</p>
	<p><i class="fa fa-envelope-o"></i> corporate@ajplantations.com.my</p>
  </div>
</div>

<br>
<div class="div2"><a href="http://localhost/ajpn/contact1.php" class="button">CONTACT US</a><a href="http://localhost/ajpn/about1.php" class="button">ABOUT US</a></div>
<br><br><br>

</body>
</html>
