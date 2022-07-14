<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
			 width: 930px;  
             padding: 5px;
             box-sizing: border-box;
			 background: #fff;
			 color: #000;
			 text-decoration : none;
			 float: right-center;
		
			 
		    }
			
			h1{
				font-size: 18px;
				color: #000;
				
			}
			
			.main .box .table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			color: #000;
			font-size: 14.5px;
			
			}
		    
			.main .box .table, th{
				background-color: grey;
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
			
				.main .btn1{
			border: none;
			color: white;
		    padding: 5px 15px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
			text-decoration: none;
			}
			
			.main .btn2{
			border: none;
			color: white;
		    padding: 5px 6px ;
			font-size: 15px;
			cursor: pointer;
			display: inline-block;
			border-radius: 12px;
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

<center>
<div class="main">
<center>
 <div class="box">
 <h2><center>JOB INFORMATION</center></h2>
			 <center><table border= "1px" size="450px">
 
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";
				//$username = $_session['username'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				
					
				$sql = "SELECT * FROM jobinfo"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>STAFF ID</th><th>PHOTO</th><th>NAME</th><th>DESIGNATION</th><th>DEPARTMENT</th><th>TYPE</th><th>START DATE</th><th>SALARY</th><th>ACTION</th><th>ACTION</th></tr>	";
				

				if(mysqli_num_rows($result)>0){
				//output each row
				while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
						
							echo "<tr>";
						    echo "<td>" . $row["s_id"]; echo"</td>";
							echo "<td><img src=".$image_src." width='65' height='65' ></td>";
							echo "<td>". $row["name"]; echo"</td>";
							echo "<td>" .$row["designation"];echo "</td>";
							echo "<td>" .$row["dep"]; echo "</td>";
							echo "<td>" .$row["type"]; echo"</td>";
							echo "<td>".$row["startD"]; echo"</td>";
							echo "<td>".$row["salary"]; echo"</td>";
							
						
							echo"<td><center><a href=\"jobiedit.php?ID=".$row["s_id"]."\" class = btn1><img src=edit.png style=width:20px;height:20px></a></center>";
							echo"<td><center><a href=\"jinfodel.php?ID=".$row["s_id"]."\" class= btn2><img src=del.png style=width:20px;height:20px></a></center></td>";
							
							echo "</tr>";
						 
						
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
				?>
						
			
				</table>
				
			
				
				<center>
				<br>
				<a href="http://localhost/ajpn/nstaffD.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL </button></a>

				</center>
				
					</div>
					
			</div>
</div>
			
 </body>
</html>

