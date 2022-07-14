<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Payroll Details Edit</title>

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

		h1{
			font-size: 19px;
		}
		.box{
			width: 600px;
			height: auto;  
			padding: 5px;
			box-sizing: border-box;
			font-size: 16px;
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
		
		.main .box h3{
					font-size: 23px;
					font-style: italic;
				}

</style>

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
				
				$sql = "SELECT * FROM bankacc WHERE s_id= $s_id";
				
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>
 	<div class="main">
<center>

	<form action="bankupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype="multipart/form-data">
	<br>
	<center>
 
			
	<div class="box">
  <h3>EDIT PAYROLL DETAILS</h3>
			<br>
	<table width ="450px">		

			
				<table width ="450px">
								
					
					<tr>
					

						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="20" value="<?php echo $row['name'];?>"><br>
							
						</td>
						
					</tr>
					
					<td><br>Designation:</td>
					    
						<td>
							<br><input type="text" name="des" placeholder="Designation" size="25" value="<?php echo $row['des'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" class="custom" name="dep" placeholder="dep" value="<?php echo $row['dep'];?>">
									<option value="Estate Department">Estate Department</option>
									<option value="Finance and Admin">Finance and Admin Department</option>
									<option value="Sustainability/OSH">Sustainability/OSH</option>
									<option value="Commercial Department">Commercial Department</option>
									<option value="Johor Labis Estate">Johor Labis Estate</option>
									<option value="Sungei Gerchang Estate">Sungei Gerchang Estate</option>
							</select>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> Date: </td>
					    
						<td><br><input type="date" id="date" name="date" value="<?php echo $row['date'];?>">
							
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Bank Name:</td>
					    
						<td>
							<br><input type="text" name="bankN" placeholder="Bestari Bank Berhad" size="20" value="<?php echo $row['bankN'];?>"><br>
							
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Bank Account:</td>
					    
						<td>
							<br><input type="text" name="bankAcc" placeholder="010-xxx-xxx-xxx-xx" size="20"value="<?php echo $row['bankAcc'];?>"><br>
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Total Amount:</td>
					    
						<td>
							<br><input type="text" name="totalA" placeholder="Total Amount" size="20"value="<?php echo $row['totalA'];?>"><br>

							
						</td>
						
					</tr>
					<tr>

						<td><br>Status: </td>
          
						<td>
						<br>
						<input type="radio" id="status" name="status" value="<?php echo $row['status'];?>">
						<label for="Approved">Approved</label><br>
						<input type="radio" id="status" name="status" value=""<?php echo $row['status'];?>"">     
						<label for="Rejected">Rejected</label><br> 
							   
						</td>
					</tr>
					
				</table>
			<br>
			<center>		
				<input type="submit" class="button" name="insert" value="SAVE">
				
				<a href="http://localhost/ajpn/bankL.php" button class="button">BACK</button></a>
		
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