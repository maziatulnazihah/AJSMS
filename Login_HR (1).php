<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ajpn";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];

if($usertype=="hr"){
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';
?>
<script type="text/javascript">
window.location.href="homepagehr.php"</script>
<?php
}
}
}
else if($usertype=="staff"){
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';
?>
<script type="text/javascript">
window.location.href="homepagestaff.php"</script>
<?php
}
}
}
else if($usertype=="hod"){
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("your login successfully and you were logined as  ' .$row['usertype'].'")</script>';
?>
<script type="text/javascript">
window.location.href="homepagehod.php"</script>
<?php
}
} 
}
else{
echo'<script type="text/javascript">alert("Invalid username and password !")</script>';
?>
<script type="text/javascript">
window.location.href="Login_HR.php"</script>
<?php
}
}
?>
<html>
<head>
<link rel="shortcut icon" href="AJlogo.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>AJSMS Login</title>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  color: #fff;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(3.jpg);

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

</style>
<body>


<center>
	
	<div class="box">
	<h1>ACHI JAYA PLANTATIONS STAFF MANAGEMENT SYSTEM (AJSMS)</h1>
	<form method="post">
	
	<div class="login">
	
  <h1>LOGIN</h1>
 <form method="post">
    <p><input type="text" name="user" placeholder="Username"></p>
    <p><input type="password" name="pass" placeholder="Password"></p>
	<p><select input="input-field" name="usertype" placeholder="usertype">
									<option value="hr">Human Resource</option>
									<option value="staff">AJPN Staff</option>
									<option value="hod">Head of Department</option>
							</select></p>
    <p class="submit"><input type="submit" name="Login" value="Login"></p>
  </form>
</div>

<div class="login-help">
  <p>Do not have an account yet? <a href="http://localhost/ajpn/reg_hr.php#">Click here to register</a></p>
</div>
</form>

</center>

</body>
</html>

