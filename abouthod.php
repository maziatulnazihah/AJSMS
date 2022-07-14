
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "ajpn");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
?>

 <?php
  
  $sql_get = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
  $count = mysqli_num_rows($sql_get);
  

  ?> 

<title>About</title>
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
		
		.main{
			
		}
		/* Slideshow container */
		.slideshow-container {
		  max-width: 500px;
		  position: relative;
		  margin: 10px;
		  float: left;
		  padding: 10px;
		
		  
		}

		/* Hide the images by default */
		.mySlides {
		  display: none;
		}

		/* Next & previous buttons */
		.prev, .next {
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: auto;
		  margin-top: -22px;
		  padding: 16px;
		  color: white;
		  font-weight: bold;
		  font-size: 18px;
		  transition: 0.6s ease;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
		  background-color: rgba(0,0,0,0.8);
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		  text-align: center;
		}

		/* The dots/bullets/indicators */
		.dot {
		  cursor: pointer;
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}
		
		.main{
			width: 700px;
			height: auto;  
			padding: 5px;
			box-sizing: border-box;
			font-size: 15px;
			text-align: justify;
			float: left;
			padding-left: 78px;
			
		}
		
		.main .button{
		color:  #fff;
		background-color:  #000 ;
		border-radius: 15px;
		border: none;
		padding: 9px 20px;
		font-size: 14px;
		cursor: pointer;
		display: inline-block;
		text-decoration: none;  
		position: center;
		}
		
		#count{
		border-radius : 100px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}
			</style>
						
</head>

<body>
		
		<div class="navbar">
  <a href="http://localhost/ajpn/homepagehod.php#" button class="dropdown-btn"><i class="fa fa-home" aria-hidden="true"></i></a>
  
  
  <div class="dropdown">
    <button class="dropbtn">Leave Application Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/ajpn/nlupdate.php#">Update Leave Application Request</a>
    </div>
  </div> 
  
  <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge bg-secondary" id="count"><?php echo $count;?></span></a><i class="fa fa-caret-down"></i> 
	   <div class="dropdown-content">
	  <?php
				 $sql_get1 = mysqli_query($conn,"SELECT * FROM leave_s WHERE status=0");
				  if(mysqli_num_rows($sql_get1)>0)
				  {
					  while($result = mysqli_fetch_assoc($sql_get1))
					  {
						  echo '<a class="dropdown-item text-primary" href="read_leave.php?id='.$result['id'].'">'.$result['name'].'</a>';
						  echo '<div class="dropdown-divider"></div>'; 
					  }
					  
				  }
				  else{
					  echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><i class="fa fa-frown-o" aria-hidden="true"></i> Sorry ! No Message </a>';
				  }
			?>
    </div>
	</div>
	
  
   <li style="float:right"><a href="http://localhost/ajpn/Login_hr.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
</diV>

<center><h1>ABOUT ACHI JAYA PLANTATIONS</h1></center>
		
		<div class ="main">
		
		<p>Achi Jaya Plantations Sdn Bhd was incorporated as Achi Jaya Services Sdn Bhd on 10 February 2001 and changed its name to Achi Jaya Plantations Sdn Bhd on 3 December 2003. The organization was obtained three palm oil estates totaling around 12, 000 hectares in Chaah, Johor Darul Takzim.</p>
        <p>The three estates consist of  Johore Labis Estate (JLE) around 4847 hectares,  Sungei Gerchang Estate (SGE) around 4526 hectares and Claire Estate (CLE) around 4526 hectares. The total capacity of milling around 60 tonnes Fresh Fruit Bunches (FFB) per hour palm oil mill from Socfin. The locations of the estates were strategic because adjoining one and another</p>

		<p>Achi Jaya Plantations always emphasizes and practices Good Agricultural Practices (GAP) and Good Manufacturing Practices (GMP) to ensure efficient management in all areas of business activities of plantations and manufacturing in perspective or aspect of eco-friendly environment.</p>
		
		<center>
        <a href="http://localhost/ajpn/about2.php" button class="button">BACK</button></a>
        <a href="http://localhost/ajpn/homepagehod.php" button class="button">CANCEL </button></a>
		</center>

<br><br>


</div>
		
		<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
 
    <img src="aj.jpeg" style="width:100%; height:290px">
    
  </div>
  
   <div class="mySlides fade">
  
    <img src="11.jpg" style="width:100%; height:290px">
   
  </div>

  <div class="mySlides fade">
   
    <img src="ajpn.jpeg" style="width:100%; height:290px">
    
  </div>
  
   <div class="mySlides fade">
  
    <img src="13.jpg" style="width:100%; height:290px">
   
  </div>


  <div class="mySlides fade">
  
    <img src="jle.jpeg" style="width:100%; height:290px">
   
  </div>
  
  <div class="mySlides fade">
  
    <img src="12.jpg" style="width:100%; height:290px">
   
  </div>


		<script>
			var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

		</script>

			
 </body>
</html>