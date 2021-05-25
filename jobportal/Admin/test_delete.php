<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from testimonial where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:testimonial.php");

?>