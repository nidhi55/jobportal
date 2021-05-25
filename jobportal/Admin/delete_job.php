<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from post_job where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:postjob.php");

?>