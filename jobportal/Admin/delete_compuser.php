<?php
include 'connect.php';
$id=$_GET['id'];

$stmt=$conn->prepare("delete from comp_user where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:comp_user.php");

?>