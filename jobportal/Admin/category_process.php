<?php  
include 'connect.php';
$id=$_POST['id'];
$name=$_POST['name'];
  $temp="update category set name=:name where id=:id";

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':name',$name);
$result=$stmt->execute();
header("location:category.php");

?>