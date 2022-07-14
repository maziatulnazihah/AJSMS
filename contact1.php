<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Contact</title>
			<style>
	body {
  font-family: Arial, Helvetica, sans-serif;
  height: auto;
  margin:0;
  background-color: #f2f2f2;
	
  
}

.container h2{
	font-size: 23px;
	font-style: italic;
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

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
 border: none;
background-color: #FFB900 ;
color: #000;
padding: 9px 20px;
font-size: 14px;
cursor: pointer;
display: inline-block;
text-decoration: none;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.column .button{
             border: none;
			 background-color: #000;
			 color: #fff;
			 padding: 9px 20px;
			 font-size: 14px;
			 cursor: pointer;
			 display: inline-block;
			 text-decoration: none;
			 border-radius: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
.container h3{
	font-style: italic;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
  margin-left: 200px;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
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

<div class="container">
  <div style="text-align:center">
    <h2>CONTACT US</h2>
    <p>If any enquries, please leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="m.png" style="width:50%; margin-left: 280px">
    </div>
    <div class="column">
   <form action="c1.php" method="POST" enctype='multipart/form-data'>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name">
        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" placeholder="Email">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message here. . ." style="height:170px"></textarea>
        <center><button class="button" name="insert" input type="submit">SUBMIT</button> 
		<a href="http://localhost/ajpn/homepagestaff.php" button class="button">CANCEL </button></a>
      </form>
    </div>
  </div>
</div>


<br>


			
 </body>
</html>