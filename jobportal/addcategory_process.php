<?php
include 'connect.php';
$cat=$_POST['cate'];
$a=1;
$stmt1= $conn->prepare("insert into category (name,status) values(:cat,:sat)");
$stmt1->bindparam(':cat',$cat);
$stmt1->bindparam(':sat',$a);
$stmt1->execute();

header("location:post_job.php");

?>