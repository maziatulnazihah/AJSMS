<?php
 //Get values passe from in login.php file
 $username = $_POST["username"];
 $password = $_POST["password"];
 $role = $_POST["role"];

//cek kalau text area tu kosong, kalau kosong dia akan kluar pop up message
 if (empty($username) || empty($password) || empty($user))
 {
     ?>   
         <script type="text/javascript">
             alert("All field are required"); 
             history.go(-1);  
             window.location.href="loginhr.php";  
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
        if ($role=="Human Resource")
        {
            $humanr = mysqli_query($con,"SELECT s_id, username, password, role FROM login WHERE Username = '".$_POST['username']."' AND Password = '".$_POST['password']."'") or die ("Failed to query database" .mysql_error());
            $row = mysqli_fetch_array($humanr); //dia masukkan data drpd data row yang dah dapat dalam table database

            if($row['Username'] == $username && $row['Password'] == $password)
            {
                //header("Location: /HRCS/Doctor.html");
                header("location: http://localhost/ajpn/homepagehr.php username='".$row['Username']."'");
                //header("location: /HRCS/Doctor.html?username=".urlencode(base64_encode($row['Username'])));//
                //header("location: /osc/staff_menu.php?email=".urlencode(base64_encode($row['email']))); //
            }
            else
            {
                ?>   
                    <script type="text/javascript">
                        alert("Login Failed"); 
                        history.go(-1);  
                        window.location.href="loginhr.php";  
                    </script>
                <?php  
                die();
            }
        } 
        //if ($userL=="Nurse")
        {
            $nurse = mysqli_query($con,"SELECT Username, Password FROM nurse_register WHERE Username = '".$_POST['username']."' AND Password = '".$_POST['password']."'") or die ("Failed to query database" .mysql_error());
            $row = mysqli_fetch_array($nurse); //dia masukkan data drpd data row yang dah dapat dalam table database

            if($row['Username'] == $usernameL && $row['Password'] == $passwordL)
            {
                //header("Location: /HRCS/nurse1.html");
                header("Location: /HRCS/nurse1.html?username='".$row['Username']."'");
            }
            else
            {
                ?>   
                    <script type="text/javascript">
                        alert("Login Failed"); 
                        history.go(-1);  
                        window.location.href="login.html";  
                    </script>
                <?php  
                die();
            }
        }
        if ($userL=="Patient")
        {
            $patient = mysqli_query($con,"SELECT Username, Password FROM patient_information WHERE Username = '".$_POST['username']."'AND Password = '".$_POST['password']."'") or die ("Failed to query database" .mysql_error());
            $row = mysqli_fetch_array($patient); //dia masukkan data drpd data row yang dah dapat dalam table database

            if($row['Username'] == $usernameL && $row['Password'] == $passwordL)
            {
                //header("Location: /HRCS/patient.html?username=$row['Username']");
                header("Location: /HRCS/patient.html?username='".$row['Username']."'");  //guna untuk parsing username ke page html lain dari file php
                //header("location: /HRCS/patient.html?username=$row['Username']");
                /*?>
                    <script>
                        var formData = new FormData();
                        formData.append("USERNAME", "'.$row['Username'].'");
              
                        var request = new XMLHttpRequest();
                        request.open("POST", "/HRCS/patient.html");
                        request.send(formData);
                    </script>
                <?php
                /*?>
                <html>s
                    <a href="/HRCS/patient.html?username=<?php echo $row['Username']; ?>">
                </html>
                <?php*/
                //header("location: /HRCS/patient.html");
                //buat coding parsing username ke page patient.html by url
            }
            else
            {
                ?>   
                    <script type="text/javascript">
                        alert("Login Failed"); 
                        history.go(-1);  
                        window.location.href="login.html";  
                    </script>
                <?php  
                die();
            }
        }
    }
}

?>