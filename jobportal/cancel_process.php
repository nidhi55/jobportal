<?php
include 'connect.php'; 	
session_start();
$jobid=$_POST['jobid'];
$stmt5=$conn->prepare("delete from applied_user where job_id=:jobid AND user_id=:uid ");
$stmt5->bindparam(':jobid',$jobid);
$stmt5->bindparam(':uid',$_SESSION['user']);
$stmt5->execute();
$stmt6=$conn->prepare("delete from selected_user where job_id=:jobid AND user_id=:uid ");
$stmt6->bindparam(':jobid',$jobid);
$stmt6->bindparam(':uid',$_SESSION['user']);
$stmt6->execute();

header("location:index.php");
?>