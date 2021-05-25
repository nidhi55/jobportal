<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from slider where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:slider1.php");

?>