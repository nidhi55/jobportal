<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from user where uid=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:user.php");

?>