
<?php 
	include("pages/connect.php");

    ?>
<head>

		<link rel="stylesheet" href="css/style1.css" type="text/css" />
</head>
	<body style="background: url(image/home.jpg);" class="form_home"><div class="thali_form" name="top">moviezoot
	<div id="tooplate_menu">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="pages/form.php">Rate Movies</a></li>
					<li><a href="pages/view.php">View</a></li>
					
				</ul>    	
			</div> 
		</div>
		
				
				<center>
					<div class="back">
						<div class="top_home">Uploaded Movies!
						</div>
							<div>
								<?php
							 

$var=mysqli_query($con,"select image from movies");

while($row=mysqli_fetch_array($var))
{
	?>
    
<img id="img_home" src="photo/<?php echo $row["image"]; ?>" alt="<?php echo $row["image"]; ?>" >



<?php

}


?>
	
							</div>
							<br/>
								<a href="#top"><div id="up">Go top</div></a>
						</div>
								
				</center>
				
		</body>
	
