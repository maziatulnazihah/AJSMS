<!DOCTYPE html>
<html>
<head>
<title>Personal Details</title>

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

h1{
	font-size: 20px;
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


		.main .box input[type="file"]{
			display: none;
			}
			

			
		.main .box h3{
			font-size: 13px;
            font-style: italic;
			color: blue;
			}
			
			.main .button{
			 border: none;
		  background-color: #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
			}


		

</style>

<div class="navbar">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn">Home</a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Staff Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nstaff.php#">New staff</a>
	  <a href="http://localhost/ajpn/staffV.php#">Staff List</a>
	  <a href="http://localhost/ajpn/dep.php#">Department</a>
	  <a href="http://localhost/ajpn/searchs.php#">Search Department</a>
    </div>
  </div> 
  
<a href="http://localhost/ajpn/leave_s.php#" button class="dropdown-btn">Leave Status </a>
  
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
  
  
</div>
<form action ="personalD.php" method = "POST">
<center>
<div class="main"> 
 
			
	<div class="box">
	 <h1>PERSONAL DETAILS</h1>
	<center><table width ="450px">
			
					<tr>
						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="25"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> Age:</td>
					    
						<td><br>
							<input type="number" name="age" placeholder="Age"> years old<br>
							
						</td>
						
					</tr>
					
					
					<tr>
						<td><br> Birth Date: </td>
					    
						<td><br><input type="date" id="birthD" name="birthD">
							
							
						</td>
						
					</tr>
				
					
					<td><br>Gender: </td>
					
					<td>
							<br><select input="input-field" name="gender" placeholder="Gender">
									<option value="Female">Female</option>
									<option value="Male">Male</option>
								</select>
					</td>
					</tr>
					
					<tr><td><br>Race: </td>
					
					<td>
							<br><select input="input-field" name="race" placeholder="Race">
									<option value="Malay">Malay</option>
									<option value="Chinese">Chinese</option>
									<option value="Indian">Indian</option>
									<option value="Others">Others</option>
								</select>
					</td>
					</tr>
					
					
					<tr>
						<td><br>Email: </td>
						
						<td><br>
						<input type="text" name="email" placeholder="example@ajplantations.com.my" size="30"><br>
						</td>
					</tr>
					
					<tr>
						<td><br>No.Phone: </td>
						
						<td><br>
						<input type="text" name="no_p" placeholder="012-xxxxxxx" size="20"><br>
						</td>
					</tr>
					
					
					<tr>
						<td><br>Address:</td>
						
						<td>
						<br>
							<input type="text" name="address" placeholder="Address" size="40"><br>
						</td>
						
					</tr>
					
					<tr>
						
						
					<tr>
					<td><br>City: </td>
						
						<td>
						<br><input type="text" name="city" placeholder="City" size="20"><br>
						</td>
						
					</tr>	
						
						
						<td><br>Poscode: </td>
						
						<td>
						<br><input type="text" name="poscode" placeholder="Poscode" size="20"><br>
						</td>
					<tr>
					
					<tr>
					
					
					<td><br>State: </td>
					
					<td>
							<br><select input="input-field" name="state" placeholder="State">
									<option value="Johor">Johor</option>
									<option value="Kedah">Kedah</option>
									<option value="Negeri Sembilan">Negeri Sembilan</option>
									<option value="Pahang">Pahang</option>
									<option value="Kelantan">Kelantan</option>
									<option value="Perak">Perak</option>
									<option value="Perlis">Perlis</option>
									<option value="Selangor">Selangor</option>
									<option value="Terengganu">Terengganu</option>
									<option value="Pulau Pinang">Pulau Pinang</option>
									<option value="Melaka">Melaka</option>
									<option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
									<option value="Sabah">Sabah</option>
									<option value="Sarawak">Sarawak</option>
			
							</select>
					</td></tr>
					
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
				
					
				</table></center>
			
			

			<br>
			<center>			
				<button class="button" name="insert" input type="submit">SAVE</button>
				
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