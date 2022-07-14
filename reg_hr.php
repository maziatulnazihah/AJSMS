<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Register</title>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  color: #fff;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(28.jpg);

}

.box h1{
	color : #FFF;
	font-size : 23px;
}

.login {
  position: relative;
  margin: 30px auto;
  padding: 20px 20px 20px;
  width: 350px;
  background: #222;
  border-radius: 3px;

}



.login h1 {
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 18px;
  font-weight: bold;
  color: #000;
  text-align: center;
  background:#FFB901 ;
  border-bottom: 1px solid #FFB901;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
}

.login p {
  margin: 20px 0 0;
}

.login p:first-child {
  margin-top: 0;
}

.login input[type=text], .login input[type=password] {
  width: 278px;
}

.login p.remember_me {
  float: left;
  line-height: 31px;
}

.login p.remember_me label {
  font-size: 12px;
  color: #777;
  cursor: pointer;
}

.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}

.login p.submit {
  text-align: right;
}

.login-help {
  margin: 20px 0;
  font-size: 15px;
  color: #fff;
  text-align: center;

}

.login-help a {
  color: #FFB901;
  text-decoration: none;
}

.login-help a:hover {
  text-decoration: underline;
}

:-moz-placeholder {
  color: #c9c9c9 !important;
  font-size: 13px;
}

::-webkit-input-placeholder {
  color: #666;
  font-size: 13px;
}

input {
    font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
}

input[type=text], input[type=password] {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  
}

input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}

input[type=submit] {
  padding: 0 18px;
  height: 29px;
  font-size: 14px;
  font-weight: bold;
  color: #000;
  background-color: #FFB901;
  border-radius: 12px;
  border: 2px solid #FFB901;
  outline: 0;
}

.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
  line-height: 34px;
}

select {
    width: 85.5%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    color: black;
	font-size: 12px;
    background-color: #fff;
    
}	

.btn{
  padding: 5.5px;
  width: 100%;
  height: 29px;
  font-size: 14px;
  font-weight: bold;
  color: #000;
  background-color: #FFB901;
  border-radius: 12px;
  border: 2px solid #FFB901;
  outline: 0;
  text-decoration: none;
}		  


.btn{
  padding: 5.5px;
  width: 100%;
  height: 29px;
  font-size: 14px;
  font-weight: bold;
  color: #000;
  background-color: #FFB901;
  border-radius: 12px;
  border: 2px solid #FFB901;
  outline: 0;
  text-decoration: none;
}		  
		
</style>
</head>
<body>


<center>
	
	<div class="box">
	<form action="m.php" method="POST" enctype="multipart/form-data">
	
	<div class="login">
  <h1>REGISTRATION FORM</h1>
  <form method="post" action="">
    <p><input type="text" name="user" placeholder="Username"></p>
    <p><input type="password" name="pass" placeholder="Password"></p>
	<p><input type="text" name="email" placeholder="Email"></p>
    <p><input type="text" name="no_p" placeholder="Phone Number"></p>
	<p><select input="input-field" name="usertype" placeholder="usertype">
									<option value="hr">Human Resource</option>
									<option value="staff">AJPN Staff</option>
									<option value="hod">Head of Department</option>
							</select></p>
							
	<br><br>
    <center>
	<class="submit"><input type="submit" name="insert" value="Submit">
	<a href="http://localhost/ajpn/Login_HR.php" button class="btn">Cancel</button></a>
	</center>
	
  </form>
</div>

</form>

</center>
<br>


</body>
</html>