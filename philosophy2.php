<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Philosophy</title>
<?php
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
?>

 <?php
  
  $sql_get = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
  $count = mysqli_num_rows($sql_get);
  

  ?> 
<style>

* {
  box-sizing: border-box;
 
}


body {
  font-family: Arial, Helvetica, sans-serif;
  height: auto;
  margin:0;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(mai.jpg);
  
	
  
}

h1{
	font-size: 23px;
}

h3{
	font-size: 15px;
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

.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}


.about-section {
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)), url(17.jpg);
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

.box{
		width: 800px;
		background: rgba(255,255,255,.8);;
		color: #000;
		height: auto;  
		padding: 10px;
	    box-sizing: border-box;
		margin-bottom: 10px;
		font-size: 15px;	
		text-align: center;		

						
}

.box .button{
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

#count{
		border-radius : 100px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}


</style>
</head>
<body>
<div class="navbar">
  <a href="http://localhost/ajpn/homepagehod.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Leave Application Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nlupdate.php#">Update Leave Application Request</a>
    </div>
  </div> 
  
  <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge bg-secondary" id="count"><?php echo $count;?></span></a><i class="fa fa-caret-down"></i> 
	   <div class="dropdown-content">
	  <?php
				 $sql_get1 = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
				  if(mysqli_num_rows($sql_get1)>0)
				  {
					  while($result = mysqli_fetch_assoc($sql_get1))
					  {
						  echo '<a class="dropdown-item text-primary" href="read_leave.php?id='.$result['id'].'">'.$result['name'].'</a>';
						  echo '<div class="dropdown-divider"></div>'; 
					  }
					  
				  }
				  else{
					  echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><i class="fa fa-frown-o" aria-hidden="true"></i> Sorry ! No Message </a>';
				  }
			?>
    </div>
	</div>
	
  
   <li style="float:right"><a href="http://localhost/ajpn/Login_hr.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
</diV>


 <center>
<br><br><br>
 <div class="box">
 
 <p><h1>VISION</h1></p>
 <p><h3>An successful organization that supplies palm crude oil in Malaysia.</h3></p>
 <br><br>
 <h1>MISSION</h1>
 <p><h3>To provide quality services and integrities in developing an effective and caliber of the private sector.</h3></p>
 <br><br>
 
 <h1>PHILOSOPHY</h1>
 <p><h3>Achi Jaya fundamental approach to business is to create long-term sustainable value for customers, employees, shareholders and the society as a whole.</h3></p>

<br><br>
 <center>
			
				<a href="http://localhost/ajpn/about2.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL </button></a>
				</center>
 <br>
 </div>



</body>
</html>