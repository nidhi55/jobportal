<?php
include 'connect.php';
$id=$_GET['id'];
$b=1;
 $temp="update comp_user set block_st=:b where id=:id";

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':b',$b);
$stmt->execute();
header("location:comp_user.php");

?>