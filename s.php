<?php
//require('db1.php');
//include("auth1.php");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `mcr` WHERE CONCAT(`r_id`, `categories`, `title`, `ingredients`, `duration`, `steps`,`serving`)LIKE'%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `mcr`";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mrb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" href = "">
		<title>Search</title>
	</head>
	
	<body>
	<style>
			*{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(133.jpg);
			height: auto;
			background-size: 1600px 1250px;
			background-position: center;
			}
			
			ul{
			float: left;
			list-style-type:none;
			}
			
			ul li{
			display: inline-block;
			}
			
			ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
			}
			
			ul li a:hover{
			background-color:#fff;
			color:#000;
			
			}
			
			u li.active a{
			background-color:#FF085D;
			color:#000;
			}
			
			.main{
			max-width: 1200px;
			margin: auto;
			}
		
		
			h1{
			text-align: center;
			font-size: 50px;
			color: #fff;
			font-weight: bold;
			}
			
			.box{
			position: relative;
			max-width: 600px;
			padding: 50px;
			background: rgba(255,255,255,.8);
			box-shadow: 0 5px 15px rgba(0,0,0,.5);
			
		}

		.box h2{
			margin: 0 0 20 px;
			padding: 0;
			font-size: 48px;
			text-transform: uppercase; 
			color: #000;
		}

		.box p{
			margin: 0 0 20px;
			padding: 0;
			font-size: 18px;
			color: #000;
		}
		
		.btn{
			border: none;
			background: #000;
			padding: 5px 13px;
			color:#fff;
			transition: 0.6s ease;
			text-decoration: none;
			}
			
		.btn:hover{
			background-color:#FE51B9;
			color:#000;
			}
	
	</style>
		<header>
	
		<div class = "main">
		<br>
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br><br><br><br>
		<center>
		<div class="box">
				<h2>Search</h2>
				<br><br>
        <form action="s.php" method="post">
          <p align="center"><input type="text" name="valueToSearch" placeholder="Value To Search"><br>
          <p align="center"><input type="submit" name="search" value="Search"><br><br>
				        <table border="1px">
  <tr>
                  <th>Title</th>
                  <th>Categories</th>
                  <th>Duration</th>
				  <th>Serving</th>
				  <th>Action</th>
                  </tr>
                <tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['categories'];?></td>
                  <td><?php echo $row['duration'];?></td>
				  <th><?php echo $row['serving'];?></td>
				  <th><?php echo"<a href=\"s1.php?ID=".$row["r_id"]."\">Read more</a>"?>
                  </tr>
                <?php endwhile;?>
                </table>
            
        </form>
					
				</table>
				
				<br><br>
			<br><br>
				<center><a href= "http://localhost/tutorial/homepage.php"class="btn">BACK</a></center>
</div>				
		</div>
		
		</center>
		</header>
		
	</body>
</html>