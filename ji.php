<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<title>Job Information</title>

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
		  background-color: #F1C40F ;
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
			width: 600px;
			height: auto;  
			padding: 5px;
			box-sizing: border-box;
			font-size: 15px;
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

		h1{
			font-size: 23px;
		}
		/* Main content */
	
		.main .box input[type="file"]{
			display: none;
			}
			

			
		.main .box h3{
			font-size: 13px;
            font-style: italic;
			color: blue;
			}


		
</style>
</head>
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

	<form action="jobinfo.php" method="POST" enctype='multipart/form-data'>
<center>

	<div class="main"> 
 
			
	<div class="box">
	 <h2>JOB INFORMATION</h2>
	<center><table width ="450px">
			
							<tr>

						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="20"><br>
							
						</td>
						
					</tr>
					<tr>

						<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="designation" placeholder="Designation" size="20"><br>
							
						</td>
						
					</tr>
				
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" name="dep" placeholder="State" value="<?php echo $row['dep'];?>">
									<option value="Estate and Sustainability/OSH">Estate and Sustainability/OSH Department</option>
									<option value="Finance and Admin">Finance and Admin Department</option>
									<option value="Commercial">Commercial Department</option>
									<option value="Johor Labis Estate">Johor Labis Estate</option>
									<option value="Sungei Gerchang Estate">Sungei Gerchang Estate</option>
									<option value="Claire Estate">Claire Estate</option>
									<option value="Palm Oil Mill">Palm Oil Mill</option>
							</select>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Type of Employement: </td>
          
						<td>
						<input type="radio" id="type" name="type" value="Full Time">
						<label for="Full Time">Full Time</label><br>
						<input type="radio" id="type" name="type" value="Part Time">     
						<label for="Part Time">Part Time</label><br> 
							   
						</td>
					</tr>
						
					</tr>
					
					
					
					<tr>

						<td><br>Start Date:</td>
					    
						<td>
							<br><input type="date" name="startD" placeholder="" size="20"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Salary:</td>
					    
						<td>
							<br><input type="text" name="salary" placeholder="Salary" size="20"><br>

							
						</td>
						
					
					</tr>
					
					<tr>
						<center><input type="file" name="file" id="file" accept="image/*">
			<label for="file">
			<i class="material-icons">
			add_photo_alternate
			</i> &nbsp;

			Choose a photo
			</center></label>

			<br>

			<h3><center>*please choose image from your file</center></h3>

			<br>
					</tr>
					
				</table>
			

			<br>
			<center>			
				<button class="button" name="insert" input type="submit">SAVE</i></button>
				
				<a href="http://localhost/ajpn/nstaff.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL</button></a>
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
						
				