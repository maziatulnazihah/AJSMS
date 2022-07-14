
<!DOCTYPE html>
<html>
<head>
<title>Commercial Department</title>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		width: 850px;  
        padding: 5px;
        box-sizing: border-box;
	    background-color: #fff ;
	    color: #000;
	    text-decoration : none;
		}
			
		.box .rectangle h1{
		font-size: 18px;
		color: #F6D103;
		}
			
		.box .table{
		  border-collapse: collapse;
		  width: 100%;
		  border: 1px solid #ddd;
		}
		.box .table, th, td{
		border: 1px solid black;
		background-color :  #fff;
		border-collapse: collapse;
		color: #000;
		font-size: 14.5px;
		text-align: left;
        padding: 16px;
		}
		    
		.box .table, th{
		background-color: #111 ;
		color : #fff;
		}
		
		.box .table tr:nth-child(even) {
		background-color: #f2f2f2;
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
			
		.box .btn1{
		border: 2px solid #000;
		background-color: #fff;
		color: #000;
		padding: 5px 11px ;
	    font-size: 12px;
		cursor: pointer;
		display: inline-block;
		text-decoration: none;
		border-radius: 12px;
		}
			
		.box .btn2{
		border: none;
		color: #FFC100;
		padding: 5px 6px ;
	    font-size: 15px;
		cursor: pointer;
		display: inline-block;
		text-decoration: none;
		border-radius: 12px;
		}
			
		.box .rectangle {
		height: 80px;
		margin-left: -5px;
		margin-top: -10px;
		width: 850px;
		background-color: #000;
		}
		
		.box .rectangle h3{
		font-style: italic;
		color: #FFC100;
		float: left-center;
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
 <div class="box">
 <div class="rectangle"><br>
 <h3><center>COMMERCIAL DEPARTMENT</center></h3>
 </div>
 <br><br>
 <table border= "1px">
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
				
					
				$sql = "SELECT * FROM newstaff WHERE dep ='Commercial Department'"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>PHOTO</th><th>NAME</th><th>DESIGNATION</th><th>DEPARTMENT</th><th>ACTION</th></tr>";
				
				//echo "<tr><th>title</th><th>duration</th><th>serving</th><th>action</th></tr>	";
				
				if(mysqli_num_rows($result)>0){
					//output each row
				while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
						
					        echo "<tr>";
							echo "<td><img src=".$image_src." width='65' height='75' ></td>";
							echo "<td>". $row["name"]; echo"</td>";
							echo "<td>" .$row["designation"];echo "</td>";
							echo "<td>" .$row["dep"]; echo "</td>";
							echo"<td><center><a href=\"comv.php?ID=".$row["s_id"]."\" class = btn1>VIEW MORE</a></center></td>";
							echo "</tr>";

						 

						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>
					</table>
				
				
				
				<center>
				<br><br>
				
				<a href="http://localhost/ajpn/dep.php" button class="button">BACK</button></a>
		
				<a href="http://localhost/ajpn/homepagehr.php" button class="button">CANCEL </button></a>
				<br><br><br><br>

				</div>
				</center>
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