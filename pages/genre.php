<html>
<?php 
include("connect.php");

if(isset($_POST['savegenre']))
{
$genre = $_POST['addgenre'];

$qsl =  "INSERT INTO genres (name) VALUES ('$genre')";	

if (!mysqli_query($con, $qsl))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
  {   
	  echo "Record inserted Successfully...";
  }
}

?>
<head>

		<link rel="stylesheet" href="../css/style1.css" type="text/css" />
</head>
	<body class="form" style="background: url(../image/bg01.jpg);"><div class="thali_form">moviezoot
	
	
			<div id="tooplate_menu">
				<ul>
					<li><a href="../home.php">Home</a></li>
					<li><a href="form.php">Rate Movies</a></li>
					<li><a href="view.php">View</a></li>
					
				</ul>    	
			</div> 
		</div>
		<div class="form"><div class="mathu">Let's Add New Genre</div>
		<br/>					<form action="genre.php"  method="POST">
		 <label class="header">genre <span>*</span></label>
						<input type="text" id="name" name="addgenre" placeholder="enter the genre"/>
						<br/>
						<center><input type="submit" value="Add genre" name="savegenre" id="save"/></center>
						</form>
		</div>
	</body>

</html>