<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM leave_s WHERE id= $id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>

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

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Leave Application Request Edit </title>
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
				width: 500px;
				height: auto;  
				padding: 2px;
				box-sizing: border-box;
				font-size: 15px;
			}

			h1{
				font-size: 20px;
			}



			/* Main content */
			.box {
	
			  font-size: 15px; /* Increased text to enable scrolling */
			 width: 730px;  
             padding: 5px;
             box-sizing: border-box;
			 color: #000;
			 text-decoration : none;
			 float: right-center;
		
			 
		    }
			
			.box h1{
				font-size: 20px;
				color: #000;
				
			}
			
			
			.box .button{
			 border: none;
		  background-color: #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
			}
			
			.box input[type="file"]{
						display: none;
						}
						

						
			.box h3{
						font-size: 12px;
						font-style: italic;
						color: blue;
						}
			
			#count{
		border-radius : 100px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
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
		
input[type=text], select {
  width: 100%;
  padding: 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 80%;
  padding: 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM leave_s WHERE id= $id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>


		
<form action="nlvsupdate.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
<center><br>
<div class="main"> 
 
	 
	 
	<div class ="box">
	<h1>EDIT LEAVE APPLICATION REQUEST</h1>
	<table width ="450px">
			
					<tr>
						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="25" value="<?php echo $row['name'];?>"><br>
							
						</td>
						
					</tr>
				
					<tr>

						<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="designation" placeholder="Designation" size="20" value="<?php echo $row['designation'];?>"><br>
							
						</td>
						
					</tr>
				
					<tr>
						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" class="custom" name="dep" placeholder="State" value="<?php echo $row['dep'];?>">
									<option value="Estate">Estate and Sustainability/OSH Department</option>
									<option value="Finance and Admin">Finance and Admin Department</option>
									<option value="Commercial">Commercial Department</option>
									<option value="JLE">Johor Labis Estate (JLE)</option>
									<option value="SGE">Sungei Gerchang Estate (SGE)</option>
									<option value="CLE">Claire Estate (CLE)</option>
									<option value="MILL">Palm Oil Mill (POM)</option>
							</select>
							</div>
						</td>
						
					</tr>
				
					<tr>

						<td><br>Type of Leave:</td>
					    
						<td>
							<br><select input="input-field" class="custom" name="type" placeholder="type">
									<option value="Annual">Annual</option>
									<option value="Casual">Casual</option>
									<option value="Medical">Medical</option>
									<option value="Matrimonial(2 Days) ">Matrimonial (2 Days)</option>
									<option value="Compassion(2 working days) ">Compassionate (2 working days)</option>
									<option value="Others">Others</option> 
							
						</select>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br>Entitlement:</td>
					    
						<td>
							<br><input type="text" name="entitle" placeholder="Entitlement" size="25" value="<?php echo $row['entitle'];?>"><br>
							
						</td>
						
					</tr>
					<tr>
						<td><br>No.of days taken:</td>
					    
						<td>
							<br><input type="text" name="dayst" placeholder="No.of days taken" size="25" value="<?php echo $row['dayst'];?>"><br>
							
						</td>
						
					</tr>	
									
					<tr>
						<td><br>Balance:</td>
					    
						<td>
							<br><input type="text" name="bal" placeholder="Balance" size="25" value="<?php echo $row['bal'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br>No. of days applied:</td>
					    
						<td>
							<br><input type="text" name="daysApp" placeholder="No. of days applied" size="25" value="<?php echo $row['daysApp'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> From: </td>
					    
						<td><br><input type="date" id="frm" name="frm" value="<?php echo $row['frm'];?>">
							
							
						</td>
						
					</tr>
					<tr>
						<td><br> To: </td>
					    
						<td><br><input type="date" id="toD" name="toD" value="<?php echo $row['toD'];?>">
							
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> Purpose of leave: </td>
					    
						<td><br><textarea cols="40" rows="3"input type="text" name="purpose" placeholder="Purpose of leave"><?php echo $row ['purpose'];?></textarea><br>
							
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Status:</td>
					    
						<td>
							<br><select input="input-field" class="custom" name="status_leave" placeholder="status_leave">
									<option value="Rejected">Rejected</option>
									<option value="Approved">Approved</option>
									
							
						</select>
							
						</td>
						
					</tr>
					
			
				</table>
			
			

			<br>
			<center>		
			
			   	<input type="submit" class="button" name="insert" value="SAVE">
				
					<a href="http://localhost/ajpn/nlupdate.php" button class="button">BACK</button></a>
				
				<a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL</button></a>
			</center>
	</form>
	
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