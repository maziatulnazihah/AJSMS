<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Payroll Details</title>

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

			/* Main content */
			.main {
			 width: 550px;  
             padding: 5px;
             box-sizing: border-box;
			 color: #000;
			 text-decoration : none;
			 font-size: 15px;
		
			 
		    }
			
			.main h3{
					font-size: 23px;
					font-style: italic;
				}
			}
			
			
			
			
			.main .btn1{
			border: none;
			background-color: #04861D ;
			color: white;
		    padding: 5px 5px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			}
			
			.main .btn2{
			border: none;
			background-color: red;
			color: white;
		    padding: 5px 5px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
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

		.main .box .custom{
			background-color : #fff;
			width: 100%;
			border-style: solid;
			color: #000;
			border-color: #fff;
			height : 150%;
			padding: 5px;
		}

		
			
</style>
</head>
<body>

<div class="navbar">
  <a href="http://localhost/ajpn/homepagehr.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
 
  <div class="dropdown">
    <button class="dropbtn">Staff Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
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
						echo '<a href="setting.php?ID='.$id_user.'" li style="float:right"><i class="fa fa-cog" aria-hidden="true"></i></a>';
					
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

  
</div>
 <br>
 <center>
 <div class="main">
	<center>
	<form action="bankAcc.php" method="POST" enctype="multipart/form-data">
	
<center>
 
			
	<div class="box">

			
			<h3>PAYROLL DETAILS</h3><br>
			
				<table width ="450px">
								
					
					<tr>
					

						<td>Staff Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="25"><br>
							
						</td>
						
					</tr>
					
					<tr>
					

					<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="des" placeholder="Designation" size="25"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" class="custom" name="dep" placeholder="State" value="<?php echo $row['dep'];?>">
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
						<td><br> Date: </td>
					    
						<td><br><input type="date" id="date" name="date">
							
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Bank Name:</td>
					    
						<td>
							<br><input type="text" name="bankN" placeholder="Bestari Bank Berhad" size="25"><br>
							
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Bank Account:</td>
					    
						<td>
							<br><input type="text" name="bankAcc" placeholder="010-xxx-xxx-xxx-xx" size="25"><br>
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Total Amount:</td>
					    
						<td>
							<br><input type="text" name="totalA" placeholder="Total Amount" size="20"><br>

							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Status: </td>
          
						<td>
						<input type="radio" id="status" name="status" value="Approved">
						<label for="Approved">Approved</label><br>
						<input type="radio" id="status" name="status" value="Rejected">     
						<label for="Rejected">Rejected</label><br> 
							   
						</td>
					</tr>
					
				</table>
			
			
			<br>
			<center>
				
				<button class="button" name="insert" input type="submit">SAVE</i></button>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL</button></a>

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