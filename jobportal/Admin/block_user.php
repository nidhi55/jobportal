<?php
include 'connect.php';
$id=$_GET['id'];
$b=1;
 $temp="update user set block_sta=:b where uid=:id";

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':b',$b);
$stmt->execute();
header("location:user.php");

?>