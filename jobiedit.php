<!DOCTYPE html>
<html>
<head>
<title>Job Information Edit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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





</style>
<body>

<div class="navbar">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn">Home</a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Staff Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nstaff.php#">Add New Staff Details</a>
	  <a href="http://localhost/ajpn/nstaffD.php#">New Staff Details</a>
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
						echo "<a href=\"setting.php?ID=".$id_user."\">Settings</a></center>";
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

  
</div>

<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$s_id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM jobinfo WHERE s_id= $s_id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>
	<form action="jiupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype='multipart/form-data'>
	<center>
 
		<br>	
	<div class="box">
  <h1>Job Information Edit</h1>
	<table width ="450px">		
				
					<tr>

						<td><br>Name:</td>
					    
						<td>
							<br><input type="text" name="name" placeholder="Name" size="20" value="<?php echo $row['name'];?>" ><br>
							
						</td>
						
					</tr>
		
					
					<tr>

						<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="designation" placeholder="Designation" size="20" value="<?php echo $row['designation'];?>" ><br>
							
						</td>
						
					</tr>
		
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" name="dep" placeholder="State">
									<option value="Estate">Estate Department</option>
									<option value="Finance and Admin">Finance and Admin Department</option>
									<option value="sustain">Sustainability/OSH</option>
									<option value="Commercial">Commercial Department</option>
									<option value="JLE">Johor Labis Estate</option>
									<option value="SGE">Sungei Gerchang Estate</option>
							</select>
							
						</td>
					
					<tr>

						<td><br>Type of employement:</td>
					    
						<td>
							<br><select input="input-field" name="type" placeholder="Type" value="<?php echo $row['type'];?>" >
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									
							</select>
							
  
				
						</td>
						
					</tr>
					
					
					
					<tr>

						<td><br>Start Date:</td>
					    
						<td>
							<br><input type="date" name="startD" placeholder="" size="18" value="<?php echo $row['startD'];?>" ><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Salary:</td>
					    
						<td>
							<br><input type="text" name="salary" placeholder="Salary" size="15" value="<?php echo $row['salary'];?>" ><br>

							
						</td>
						
					</tr>
					
				</table>
			
			
			<br>
			<br>
			<center>		
			
			<button class="button" name="insert" input type="submit">SAVE</i></button>
				
				<a href="http://localhost/ajpn/jinfo.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL</button></a>
				
			</center>
	</form>
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