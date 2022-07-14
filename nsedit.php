<!DOCTYPE html>
<html>
<head>
<title>New Staff Details Edit</title>
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
			width: 600px;
			height: auto;  
			padding: 30px;
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
		
		.main .box h4{
			font-size: 15px;
            font-style: italic;
			float : left;
			
			}
	.container {
      width: 600px;
      margin: 100px auto; 
	
  }
  .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 25%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: green;
  }
  .progressbar li.active:before {
      border-color: #55b776;
  }
  .progressbar li.active + li:after {
      background-color: #55b776;
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
				$sql = 	"SELECT * FROM newstaff WHERE s_id= $s_id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>
	<form action="nsupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype="multipart/form-data">
	
<center>
<div class="main"> 
 
			
	<div class="box">
	 <h2>ADD NEW STAFF DETAILS</h2>
	<center><table width ="450px">
			
					<tr>

						
						<h4>PERSONAL DETAILS</h4>
						

					</tr>
					
					<tr>	
						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="20" value="<?php echo $row['name'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> Age:</td>
					    
						<td><br>
							<input type="number" name="age" placeholder="Age"value="<?php echo $row['age'];?>"> years old<br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br>Email: </td>
						
						<td><br>
						<input type="text" name="email" placeholder="example@ajplantations.com.my" size="30" value="<?php echo $row['email'];?>"><br>
						</td>
					</tr>
					
					<tr>
						<td><br>No.Phone: </td>
						
						<td><br>
						<input type="text" name="no_p" placeholder="012-xxxxxxx" size="20" value="<?php echo $row['no_p'];?>"><br>
						</td>
					</tr>
					
					
					<tr>
						<td><br>Address:</td>
						
						<td>
						<br>
							<input type="text" name="address" placeholder="Address" size="40"value="<?php echo $row['address'];?>"><br>
						</td>
						
					</tr>
					
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
					</td>
					</tr>				
					</table>
					
					
					
					
					
					<table width ="450px">
			
					<tr>
						<center>

						<br>
						
						<h4>JOB INFORMATION</h4>
						

					</tr>
						
						<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="designation" placeholder="Designation" size="20" value="<?php echo $row['designation'];?>"><br>
							
						</td>
						
					</tr>
				
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" name="dep" value="<?php echo $row['dep'];?>">
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

						<td><br>Salary:</td>
					    
						<td>
							<br><input type="text" name="salary" placeholder="Salary" size="20"value="<?php echo $row['salary'];?>"><br>

							
						</td>
						
					
					</tr>
					
			</table></center>
			
			

			<br>
			<center>			
				<button class="button" name="insert" input type="submit">SAVE</button>
				
				<a href="http://localhost/ajpn/nstaffD.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL</button></a>
			</center>
</div></center>



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