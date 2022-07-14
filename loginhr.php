<!DOCTYPE html>

<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>


</style>
<body>
<div class="loginbox">
      <h2>LOGIN HERE</h2>
       <form action="process.php" autocomplete="off" id = "login" method="POST">
	       <p>Username</p>
		   <input type= "text" name= "username" placeholder="Enter Username">
		   <p>Password</p>
		   <input type= "password" name="password" placeholder="Enter Password">
		   <p>Role</p>
			   <select name="role"> 
			    <option name="role" value="Human Resource">Human Resource</option>
                <option name="role" value="Staff">Staff</option>
                <option name="role" value="HOD">HOD</option>
                
				</select><br><br>
		 
		   <input type="submit" name="" value="LOGIN">
		   
		   <a href="#" >Forgot password</a><br>
		   <a href="#">Don't have an account?</a>
		   	

      </form>	   
   </div>
	
<div>
</body>
</html>