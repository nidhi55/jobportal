<?php
include 'connect.php';
$id=$_GET['id'];
$b=0;
$temp="update comp_user set block_st=:b where id=:id";

$stmt=$conn->prepare($temp);
$stmt->bindparam(':b',$b);
$stmt->bindparam(':id',$id);
$stmt->execute();
header("location:comp_user.php");
?>