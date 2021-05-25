<?php 
include 'connect.php';
$name=$_POST['name'];
$status=0;
$stmt=$conn->prepare("insert into category(name,status) values(:name,:st)"); 
$stmt->bindparam(':name',$name);
$stmt->bindparam(':st',$status);
$result=$stmt->execute();
if ($result) 
{
	header("location:category.php");
	
}

?>