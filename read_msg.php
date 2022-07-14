<?php
include_once'connection.php';
?>

<?php
if(isset($_GET['id'])){
	$main_id = $_GET['id'];
	$sql_update = mysqli_query($con,"UPDATE message SET status=1 WHERE id='$main_id'");
	
}

?>


<html>
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
	<style>
	#count{
		border-radius : 50px;
		position : relative;
		top: -10px;
		left: -10px;
		background-color : red; 
	}
	#table{
		margin-top: 10%;
		color : black;
	}
	</style>
  </head>
  <body>
  Hello Mai !
  
  <div class ="container" id="table">
	<div class = "row">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
	  <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 
	$sr_no=1;
	$sql_get1 = mysqli_query($con,"SELECT * FROM message WHERE status=1");
    while($main_result = mysqli_fetch_assoc($sql_get1)) :
	?>
	<tr>
      <th scope="row">1</th>
      <td><?php echo $main_result['name']; ?></td>
      <td><?php echo $main_result['message']; ?></td>
      <td><?php echo $main_result['cr_date']; ?></td>
	  <td><a href="delete.php?id=<?php echo $main_result['id']?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
	</tr>
	<?php endwhile ?>
	</tbody>

	
     
	</tbody>
	</table>
	</div>
  </div>
  </body>
</html>