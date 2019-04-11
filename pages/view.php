<html>
<head>

		<link rel="stylesheet" href="../css/style1.css" type="text/css" />
</head>
	<body style="background: url(../image/bg02.jpg);" class="form"><div class="thali_form">moviezoot
	
	
			<div id="tooplate_menu">
				<ul>
					<li><a href="../home.php">Home</a></li>
					<li><a href="form.php">Rate Movies</a></li>
					<li><a href="view.php">View</a></li>
					
				</ul>    	
			</div> 
		</div>
		<div class="form">
		<?php
include("connect.php");
$result = mysqli_query($con,"SELECT * FROM movies");
?><?php
echo "<table>
					<tr>
					<th>ID</th>
					<th>MOVIE NAME</th>
					<th>YEAR</th>
					<th>GENRE</th>
					<th>RATING</th>
					<th>EDIT</th>
					<th>DELETE</th>
					</tr>";
					while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'].  "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "<td>" . $row['rating'] . "</td>";
  ?>
					<td><form name="edit" method="post" 
		action="form.php">
<input type="hidden" name="id" 
		value="<?php echo $row['id']  ?>" />
<input type="submit" name="edit" 
		id="button" value="Edit" />
</form>
  </td>
  <td>
<form name="delete" method="post" 
		action="">
<input type="hidden" name="id" 
		value="<?php echo $row['id']  ?>" />
<input type="submit" name="delete" 
		id="button" value="Delete" />
</form>
  </td>
   <?php
  echo "</tr>";
  
 
  }
   echo "</table>";

?>

</div>

<p>&nbsp;</p>
<?php
if(isset($_POST['delete']) && $_POST['id']!="" )
{ 
$id=$_POST['id'];
$result = mysqli_query($con, 
"DELETE FROM movies where id='$id'");
}
?>
<?php
mysqli_close($con);
?>
			
		
		
	</body>

</html>