<?php
session_start();
include 'connect.php';
$id=$_POST['id'];
  $uid=$_SESSION['user'];
  $res=$_FILES['res']['name'];
  $msg=$_POST['msg'];
  //$nm=$_POST['f'];
   $stmt= $conn->prepare("INSERT INTO applied_user (job_id, user_id, resume_nm,msg) VALUES (:jobid,:uid,:res,:msg)");
   $stmt->bindparam(':jobid',$id);
   $stmt->bindparam(':uid',$uid);
   $stmt->bindparam(':res',$res);   
   $stmt->bindparam(':msg',$msg);
   
   move_uploaded_file($_FILES['res']['tmp_name'],"images/resume/".$res);
   $stmt->execute();
   if ($stmt) {
   $a="1";
   header("location:index.php?apply=$a");
  }
?>