<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Download</title>
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

h3{
	font-size: 23px;
	font-style: italic;
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.button{
		  border: none;
		  background-color:  #FFC300;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
	}
	
.button1{
		  border: none;
		  background-color:  #aaa;
		  color: #000;
		  padding: 9px 20px;
		  font-size: 14px;
		  cursor: pointer;
		  display: inline-block;
		  text-decoration: none;
	}

</style>
						
</head>

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

<body>
<br>
<center><h3> DOWNLOAD PAYSLIP</h3></center>
<br>
	<center>
	<table>
  <tr>
    <th>NAME</th>
    <th>DOWNLOAD</th>
  </tr>
  <tr>
    <td>Hamira Binti Hamdan</td>
    <td><center><a href="download.php?file=Payslip 1"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
  <tr>
    <td>Farah Asyiqin Kauthar Binti Mohd Harun</td>
    <td><center><a href="download.php?file=Payslip 2"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
  <tr>
    <td>Siti Noor Zamiliya Binti Md Hairi</td>
   <td><center><a href="download.php?file=Payslip 3"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
   <tr>
    <td>Muhd Hakimi Bin Hamri</td>
   <td><center><a href="download.php?file=Payslip 4"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
   <tr>
    <td>Muhd Amirul Hilmi Bin Zulkefli</td>
   <td><center><a href="download.php?file=Payslip 5"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
   <tr>
    <td>Noradilla Binti Aidi Amin</td>
   <td><center><a href="download.php?file=Payslip 6"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>
   <tr>
    <td>Muhammad Nazaruddin Bin Dullah</td>
   <td><center><a href="download.php?file=Payslip 7"  button class="button">DOWNLOAD  <i class="fa fa-download"></i></button></a></center></td>
  </tr>


</table>
	

		
	
	</center>
	<br>
	<center>
	<a href="http://localhost/ajpn/homepagestaff.php" button class="button1">CANCEL </button></a>
	</center>

</body>
</html>