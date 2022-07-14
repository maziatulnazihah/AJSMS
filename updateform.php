<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mrb";	
				$r_id = $_GET['ID'];

				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "mrb");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = "SELECT * FROM mcr WHERE r_id = $r_id";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>


				<!DOCTYPE html>
				<html>
				<head>
				<meta charset="utf-8">
				<link rel="stylesheet" href="style2.css">
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
					  rel="stylesheet">

				<title>Edit Form</title>
				</head>

				<body>

				<div class = "main">
				<ul>
				<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
				</ul>
				</div>

				<br><br><br>

				<form action="update.php?ID=<?php echo $r_id;?>" method="POST" enctype="multipart/form-data">


				<div class="pc-tab">
				<input checked="checked" id="tab1" type="radio" name="pct"/>

				<nav>
				<ul>
				<li class="tab1">
				<label for="tab1">Edit Recipe</label>
				</li>
				</ul>
				</nav>
				<section>
				<div class="tab1">


				<p>
				<font color="black">
				<br>

				<center>
				<table>
				<tr>
				<td>Categories: </td>
				<td>
				<select input="input-field" name="categories" value="<?php echo $row['categories'];?>">
				 <option value="breakfast">1-breakfast</option>
				 <option value="lunch">2-lunch</option>
				 <option value="dinner">3-dinner</option>
				 <option value="tea time">4-tea time</option>
				 <option value="dessert">5-dessert</option>
				 <option value="cookies">6-cookies</option>
				 <option value="healthy food">7-healthy food</option>
				 <option value="drink&juices">8-drinks and juices</option>

				   </select>
				</td>

				</tr>
				
				<tr>
			<td>Origin Food: </td>
			<td>
			<select input="input-field" name="origin" placeholder="Category">
			 <option value="Malaysian">1-Malaysian</option>
			 <option value="Chinese">2-Chinese</option>
			 <option value="Indian">3-Indian</option>
			 <option value="Korean">4-Korean</option>
			 <option value="Japanese">5-Japanese</option>
			 <option value="Arabian">6-Arabian</option>
			  <option value="Vietnamese">7-Vietnamese</option>
			 <option value="Western">8-Western</option>

			   </select>
			</td>

			</tr>

				<tr>
				<td>Title of Recipe: </td>
				<td>
				<textarea cols="40" rows="1"input type="text" name="title"><?php echo $row ['title'];?></textarea><br>
				</td>

				</tr>
				<tr>
				<td>Ingredients:</td>
				<td>
				<textarea cols="50" rows="5"input type="text"
				placeholder="ingredients" name="ingredients"><?php echo $row ['ingredients'];?></textarea><br>
				</td>
				</tr>

				<tr>
				<td>Duration:</td>
				<td>
				<textarea cols="40" rows="1" input type="text" name="duration" placeholder="duration" name="duration"><?php echo $row ['duration'];?></textarea>
				</td>
				</tr>

				<tr>
				<td>Steps:</td>
				<td>
				<textarea cols="50" rows="5"input type="text"
				placeholder="steps" name="steps"><?php echo $row ['steps'];?></textarea><br>
				</td>
				</tr>

				<tr>
				<td>Serving Size: </td>
				<td>
				<textarea cols="40" rows="1"input type="number"
				placeholder="serving" name="serving"><?php echo $row ['serving'];?></textarea><br>
				</td>
				</tr>
				<tr>

				<center><input type="file" id="file" name="file"  accept="image/*">
                <label for="file">
                <i class="material-icons">
                add_photo_alternate
                </i> &nbsp;

                Choose a photo
                </center></label>

                <br>

                <h3><center>*please choose image from your file</center></h3>

				<br>


				</font>
				</table>
				</p>
				</center>

				<center>

								<input type="submit" class="btn" name="insert" value="SAVE">
								<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
							
							
				</center>
				</form>
				</body>
				</html>