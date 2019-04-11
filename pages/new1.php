<?php
if(isset($_POST['save']))
{
$name = $_POST['name'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];

$upload_image=$_FILES["myimage"]["name"];  //image name

$folder="../photo/";  // folder name where image will be store

move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);

$sql = "INSERT INTO movies (name,year,genre,rating,path,image) VALUES ('$name','$year','$genre','$rating','$folder','$upload_image')";	
}
?>