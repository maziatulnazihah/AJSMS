<div class="tab">

  <button class="tablinks" onclick="openCity(event, 'Job Information')">Job Information</button>
  
</div>

<div id="Personal Details" class="tabcontent">
<form action ="personalD.php" method = "POST">

  <h1>Job Information</h1>

			
			
			<center>
				<table width ="450px">
				
					
					
					</tr>

						<td>Name:</td>
					    
						<td>
							<input type="text" name="name" placeholder="Name" size="50"><br>
							
						</td>
						
					</tr>
					
					<tr>
						<td><br> Age:</td>
					    
						<td><br>
							<input type="number" name="age" placeholder="Age"> years old<br>
							
						</td>
						
					</tr>
					
					
					<tr>
						<td><br> Birth Date: </td>
					    
						<td><br><input type="date" id="birthD" name="birthD">
							
							
						</td>
						
					</tr>
				
					
					<td><br>Gender: </td>
					
					<td>
							<br><select input="input-field" name="gender" placeholder="Gender">
									<option value="Female">Female</option>
									<option value="Male">Male</option>
								</select>
					</td>
					</tr>
					
					<tr>
						<td><br>Email: </td>
						
						<td><br>
						<input type="text" name="email" placeholder="example@ajplantations.com.my" size="40"><br>
						</td>
					</tr>
					
					<tr>
						<td><br>No.Phone: </td>
						
						<td><br>
						<input type="text" name="no_p" placeholder="012-xxxxxxx" size="20"><br>
						</td>
					</tr>
					
					
					<tr>
						<td><br>Address:</td>
						
						<td>
						<br>
							<input type="text" name="address" placeholder="Address" size="60"><br>
						</td>
						
					</tr>
					
					<tr>
						
						
					<tr>
					<td><br>City: </td>
						
						<td>
						<br><input type="text" name="city" placeholder="City" size="20"><br>
						</td>
						
					</tr>	
						
						
						<td><br>Poscode: </td>
						
						<td>
						<br><input type="text" name="poscode" placeholder="Poscode" size="20"><br>
						</td>
					<tr>
					
					<tr>
					
					
					<td><br>State: </td>
					
					<td>
							<br><select input="input-field" name="state" placeholder="State">
									<option value="Johor">Johor</option>
									<option value="Kedah">Kedah</option>
									<option value="Negeri Sembilan">Negeri Sembilan</option>
									<option value="Pahang">Pahang</option>
									<option value="Kelantan">Kelantan</option>
									<option value="Perak">Perak</option>
									<option value="Perlis">Perlis</option>
									<option value="Selangor">Selangor</option>
									<option value="Terengganu">Terengganu</option>
									<option value="Pulau Pinang">Pulau Pinang</option>
									<option value="Melaka">Melaka</option>
									<option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
									<option value="Sabah">Sabah</option>
									<option value="Sarawak">Sarawak</option>
			
							</select>
					</td>
					</tr>
					
				</table>
			
			

			<br>
			<center>
				<input type="submit" class="btn" name="insert" value="SAVE">
				
				<a href="http://localhost/ajpn/ji.php"><input type="button" class="btn" value="NEXT"></a>
		
				<a href="http://localhost/ajpn/homepagehr.php"><input type="button" class="btn" value="CANCEL"></a>
	</form>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
			


				
		</body>
			
			
			
			
			
			
	
		
		
	
  
  
	
</html>