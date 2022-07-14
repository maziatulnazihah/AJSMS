<?php
//require('db1.php');
//include("auth1.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `bankacc` WHERE CONCAT(`s_id`, `name`, `bankN`, `bankAcc`, `totalA`)LIKE'%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bankacc`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "ajpn");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Search Payroll</title>
	</head>
	
	<body>
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
				.main .box{
				 width: 750px;  
				 padding: 50px;
				 box-sizing: border-box;
				 color: #000;
				 font-size: 15px;	
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
				
				.main .button:hover{
				background-color: #000;
				color: #fff;
			}

					
				.main .btn1{
				border: 2px solid #000 ;
				background-color: #fff ;
				color: #000  ;
				padding: 5px 11px ;
				font-size: 12px;
				cursor: pointer;
				display: inline-block;
				text-decoration: none;
				border-radius: 12px;
				}
				
				.main .btn2{
				border: none;
				background-color: black;
				padding: 9px 23px;
				font-size: 15px;
				cursor: pointer;
				display: inline-block;
				color: white;
				}
				
				.main h3{
					font-size: 23px;
					font-style: italic;
				}
				
			    .main .table{
				border-collapse: collapse;
				width: 100%;
				border: 1px solid #ddd;
				}
				.main .table, th, td{
				border: 1px solid black;
				background-color :  #fff;
				border-collapse: collapse;
				color: #000;
				font-size: 14.5px;
				text-align: left;
				padding: 16px;
				}
					
				.main.table, th{
				background-color: #111 ;
				color : #FFF;
				}
				
				.main .table tr:nth-child(even) {
				background-color: #f2f2f2;
				}
				
		

		
	</style>
		<header>
		
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
						echo '<a href="setting1.php?ID='.$id_user.'" li style="float:right"><i class="fa fa-cog" aria-hidden="true"></i></a>';
					
						
						
						}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>

</diV>
<div class="main">
		<form action = "payrolls.php" method = "POST">
		<center>
		<div class="box">
		
				<h3>SEARCH PAYROLL</h3>
				<br>
				  <p align="center"><input type="text" size="50" name="valueToSearch" placeholder="Type name here to search"><br>
				 <p align="center"><input type="submit" class="btn2"name="search" value="Search"><br><br>
				 <table border="1px">
   <tr>
		
                  <th>NAME</th>
				  <th>ACTION</th>
				  
				
  </tr>
  <tr>
   <?php while($row = mysqli_fetch_array($search_result)):?>
                  <td><?php echo $row['name'];?></td>
				  <td><center><?php echo"<a href=\"payrolls1.php?ID=".$row["s_id"]."\"div class= btn1>VIEW MORE</a>"?><center></td>
				
 </tr>
   <?php endwhile;?>
   </table>

   
				
			<br><br>
				<a href="http://localhost/ajpn/homepagestaff.php" button class="button">CANCEL </button></a>
</div>				
		</div>
		</form>
		</center>
		</header>


		
	</body>
</html>