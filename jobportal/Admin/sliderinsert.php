<?php  
include 'connect.php';

$heading=$_POST['heading'];
$subheading=$_POST['subheading'];
$img=$_FILES["image"]["name"];

move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$img );

$stmt=$conn->prepare("insert into slider(image,heading,subheading) values(:image,:heading,:subheading)"); 
$stmt->bindparam(':image',$img);
$stmt->bindparam(':heading',$heading);
$stmt->bindparam(':subheading',$subheading);
$result=$stmt->execute();
if ($result) 
{
	header("location:slider1.php");
	
}

?>