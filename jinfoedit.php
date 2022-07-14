<div id="Bank Account Information" class="tabcontent">
<form action="bankupdate.php?ID=<?php echo $s_id;?>" method="POST" enctype='multipart/form-data'>
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
				
				$sql = "SELECT * FROM bankacc WHERE s_id = $s_id";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>
	
   <h1>Bank Account Information</h1>
 
	
			
			<center>
			
				<table width ="450px">
								
					
					<tr>
					

						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="50"value="<?php echo $row['name'];?>"><br>
							
						</td>
						
					</tr>
					
					<tr>

						<td><br>Bank Name:</td>
					    
						<td>
							<br><input type="text" name="bankN" placeholder="Bestari Bank Berhad" size="30"value="<?php echo $row['bankN'];?>"><br>
							
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Bank Account:</td>
					    
						<td>
							<br><input type="text" name="bankAcc" placeholder="010-xxx-xxx-xxx-xx" size="30"value="<?php echo $row['bankAcc'];?>"><br>
						</td>
						
					</tr>
					
					
					<tr>

						<td><br>Total Amount:</td>
					    
						<td>
							<br><input type="text" name="totalA" placeholder="Total Amount" size="20"value="<?php echo $row['totalA'];?>"><br>

							
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
