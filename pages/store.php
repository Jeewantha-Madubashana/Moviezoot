

<head>

		<link rel="stylesheet" href="../css/style1.css" type="text/css" />
</head>
	<body class="form" style="background: url(../image/bg02.jpg);"><div class="thali_form">moviezoot
	
	
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
include("new1.php");

if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));
}
else
{
echo "<h1 style='color:white;text-align:center;'>Record inserted Successfully....</h1>";
}
?></div>
	</body>
