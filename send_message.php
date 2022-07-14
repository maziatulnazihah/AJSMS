<?php

include_once 'connection.php';

if(isset($_POST['send']))
{
	$name = $_POST['name'];
	$message = $_POST['message'];
	$date = date('y-m-d h:i:s');
	
	$sql_insert = mysqli_query($con,"INSERT INTO message(name, message, cr_date)VALUES('$name','$message','$date')");
	if($sql_insert)
	{
		echo"<script>alert('message send successfully');</script>";
	}
	else{
		echo mysqli_error($con);
		exit;
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
	<style>
	#count{
		border-radius : 50px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}
	
	#center{
		position : absolute;
		top : 50%;
		left : 50%;
		transform: translate(-50%, -50%);
	}
	</style>
  </head>
  <body>
  
  <div class="container" id="center">
	<div class ="row">
		<div class = "col-sm-4"></div>
		<div class = "col-sm-4">
			
				<form method ="POST">
				<div class = "form-group">
					<label form="exampleInputEmail">Name</label>
					<input type="text" class ="form-control" name="name" id="exampleInputEmail" arla-describedby="emailHelp" placeholder="Type Your Name">
				</div>
				
				<div class = "form-group">
					<label form="exampleFormControlTextarea1">Enter Message</label>
					<textarea class ="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				
				<div class = "form-group fore check">
					<input type="checkbox" class ="form-check-input" id="exampleCheck1">
					<label class="fore-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type = "submit" name="send" class="btn btn-primary">Submit</button>
				</div>
				
			
			</form>
		</div>
		<div class = "col-sm-4"></div>
	</div>
  </div>