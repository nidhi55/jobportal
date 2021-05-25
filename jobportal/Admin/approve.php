<?php 

			  include'connect.php';
$id=$_GET['id'];
$temp="update category set status=0 where id=:id";
$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$result=$stmt->execute();
header("location:category.php");

?>