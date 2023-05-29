<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
	
 </head>
 
<body>
      <div class="container">
          <div class="row"> 
          	<div class="col">
          		<table class='table table-border'>;
          			<tr><th>regno</th>
          				<th>name</th>
          				<th>address</address></th>
          				<th>update</th>
          				<th>delete</th>
          				
          			</tr>
 <?php
 	include"confi.php";
 	$query2="select*from sample";
 	$result=mysqli_query($con,$query2);
 	while($row=mysqli_fetch_array($result))
 	{
 		$id=$row[1];
 		echo"<tr><td>$row[1]</td>";
     		echo"<td>$row[0]</td>";
     		echo"<td>$row[7]</td>";

     			 			echo"<td><a class='btn btn-success' href='updt.php?id=$id' name='updt'>
     			 			update</a></td>";
     			 			echo"<td><a class='btn btn-danger' href='del.php?id=$id' name='del'>
     			 			delete</a></td></tr>";



 	}
 	?>
          			
          		</table>
          		
          	</div>
          </div>
        </div>