<!DOCTYPE HTML>
<html>
	<head>
		<title> Homepage</title>
	

	<body>
	<style>
	
	body{
		background: #999;
		margin: 0;
	}
	
	.navbar{
		width: 100%;
		background: #6699cc;
	}
	
	ul{
		text-align: left;
		display: inline;
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	ul li{
		font: bold 12px/18px sans-serif;
		display: inline-block;
		position: relative;
		padding: 25px 20px;
		background: #6699ccc;
	}
	
	ul li a{
		text-decoration: none;
		padding: 25px 20px;
		color: white;
		font-size: 18px;
	}
	
	ul li:hover{
		background:#4dd0e1;
		color: white;
	}
	
	ul li ul{
		padding: 0;
		position: absolute;
		top: 70px;
		left: 0;
		width: 250px;
		display: none;
		visibility: hidden;
		
	}
	
	ul li ul li{
		background: #00acc1;
		display: block;
	}
	
	
	
	
	
	
	</style>
	</head>
		<div class="navbar">
		    <ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a></li>
					<ul>
						<li><a href="#">Design</a></li>
						<li><a href="#">Development</a></li>
						<li><a href="#">Hosting</a></li>
						<li><a href="#">Graphic</a></li>
							<ul>
						        <li><a href="#">Add</a></li>
						        <li><a href="#">Delete</a></li>
						        <li><a href="#">View</a></li>
						        <li><a href="#">Update</a></li>
					       </ul>
					</ul>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
	</body>
</html>