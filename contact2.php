<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<br>
</div>
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
   <form action="c2.php" method="POST" enctype='multipart/form-data'>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name">
        <label for="email">Email Address</label>
        <input type="text" id="email" name="email" placeholder="Email">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write your message here. . ." style="height:170px"></textarea>
        <center><button class="button" name="insert" input type="submit">SUBMIT</button> 
		<a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL </button></a>
      </form>
    </div>
  </div>
</div>
</body>
</html>