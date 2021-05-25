<?php
include 'connect.php';
$id=$_GET['id'];
$b=0;
$temp="update user set block_sta=:b where uid=:id";

$stmt=$conn->prepare($temp);
$stmt->bindparam(':b',$b);
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:user.php");
?>