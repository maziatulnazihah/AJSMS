
	<div id="Job Information" class="tabcontent">
	<form action="jiupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype='multipart/form-data'>
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ajpn";	
				$s_id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "ajpn");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = 	"SELECT * FROM jobinfo WHERE s_id= $s_id";
					
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>
  <h1>Job Information</h1>
 
	
			
			<center>
				<table width ="450px">
					
					<tr>

						<td>Designation:</td>
					    
						<td>
							<input type="text" name="designation" placeholder="Designation" size="50" value="<?php echo $row['designation'];?>" ><br>
							
						</td>
						
					</tr>
		
					
					<tr>

						<td><br>Department:</td>
					    
						<td>
							<br><select input="input-field" name="dep" placeholder="State" value="<?php echo $row['dep'];?>" >
									<option value="Johor">Commercial</option>
									<option value="Kedah">Human Resource</option>
									<option value="Negeri Sembilan">Information Technology</option>
							</select>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Type of employement:</td>
					    
						<td>
							<br><select input="input-field" name="type" placeholder="Type" value="<?php echo $row['type'];?>" >
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									
							</select>
							
  
				
						</td>
						
					</tr>
					
					
					
					<tr>

						<td><br>Start Date:</td>
					    
						<td>
							<br><input type="date" name="startD" placeholder="" size="20" value="<?php echo $row['startD'];?>" ><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Salary:</td>
					    
						<td>
							<br><input type="text" name="salary" placeholder="Salary" size="20" value="<?php echo $row['salary'];?>" ><br>

							
						</td>
						
					</tr>
					
				</table>
			
			
			<br>
			<center>
				<input type="submit" class="btn" name="insert" value="SAVE">
		
				<a href="http://localhost/ajpn/homepagehr.php"><input type="button" class="btn" value="CANCEL"></a>
				
				<br><br><br><br>
	</form>		
</div>
