<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$r_id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM multiuserlogin WHERE r_id= $r_id";
					
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
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Setting</title>
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

		.box{
			width: 550px;
			height: auto; 
			background-color : #111;			
			padding: 15px;
			box-sizing: border-box;
			font-size: 15px;
			border: 2px solid #FFF;
			border-radius: 25px;
			color : #fff;
		}

		.button{
		border: none;
		  background-color: #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
		  
		}

		.main .box h1{
			font-size: 25px;
		}

		.main .box input[type="file"]{
			display: none;
			}
			
		.main .box	hr{
			  border: 1px solid #FFA601;
			  border-radius: 5px;
			  width: 450px;
			}
			
		.main .box h3{
			font-size: 15px;
            font-style: italic;
			color: blue;
			}

         .main .box .custom{
			background-color : #fff;
			width: 100%;
			border-style: solid;
			color: #000;
			border-color: #fff;
			height : 150%;
			padding: 5px;
		}
		
		/* Style inputs */
		input[type=text], select, textarea {
		  width: 100%;
		  padding: 5px;
		  border: 1px solid #ccc;
		  margin-top: 6px;
		  margin-bottom: 16px;
		  resize: vertical;
		}
		input[type=password], select, textarea {
		  width: 100%;
		  padding: 5px;
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
		background-color: #FFB900 ;
		color: #000;
		padding: 9px 20px;
		font-size: 14px;
		cursor: pointer;
		display: inline-block;
		text-decoration: none;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
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
</DIV>
  <li style="float:right"><a href="http://localhost/ajpn/setting1.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
</diV>
		
	<br><br><br><br>
	<div class="main"> 
	<center><div class="box">
	 <h1>SETTING</h1>
	 <hr>
	</hr>
	<center><table width ="450px">
			<form action="setupdate.php?ID=<?php echo $r_id;?>" method="POST" enctype="multipart/form-data">	
					<tr>
					

						<td>Username:</td>
					    
						<td>
							<input type="text" name="user" size="15" value="<?php echo $row['username'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Password:</td>
					    
						<td>
							<br><input type="password" name="pass" size="15" value="<?php echo $row['password'];?>"><br>
							
						</td>
						
					</tr>
	
					
				</table>
			
			<br>
			<center>		
				
				<button class="button" name="insert" input type="submit">SAVE</button>
		
				<a href="http://localhost/ajpn/homepagestaff.php" button class="button">CANCEL </button></a>
				
				<a href="http://localhost/ajpn/Login_HR.php" button class="button">LOGOUT </button></a>
				<br><br><br><br>
			</center>
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
			
 </body>
</html>