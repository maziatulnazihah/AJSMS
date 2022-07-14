<?php
 //Get values passe from in login.php file
 $s_id = $_POST ['ID'];
 $usernameL = $_POST['username'];
 $passwordL = $_POST['password'];
 $userL = $_POST['user'];

//cek kalau text area tu kosong, kalau kosong dia akan kluar pop up message
 if (empty($usernameL) || empty($passwordL) || empty($userL))
 {
     ?>   
         <script type="text/javascript">
             alert("All field are required"); 
             history.go(-1);  
             window.location.href="Login_HR";  
         </script>
     <?php  
     die();
 }
 else
 {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ajpn";   

    $con = mysqli_connect($servername, $username, $password,$db);

    if (!$con) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        if ($userL=="HR")
        {
            $hr = mysqli_query($con,"SELECT Username, Password FROM hr_reg WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'") or die ("Failed to query database" .mysql_error());
            $row = mysqli_fetch_array($hr); //dia masukkan data drpd data row yang dah dapat dalam table database

            if($row['username'] == $usernameL && $row['password'] == $passwordL)
            {
               
                header("location: /HRCS/homepagehr.php?username='".$row['username']."'");
                
            }
            else
            {
                ?>   
                    <script type="text/javascript">
                        alert("Login Failed"); 
                        history.go(-1);  
                        window.location.href="Login_HR.php";  
                    </script>
                <?php  
                die();
            }
        } 
		?>