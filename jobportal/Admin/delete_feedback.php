<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from feedback where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:feedback.php");

?>