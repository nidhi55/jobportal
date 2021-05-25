<?php
session_start();
include 'connect.php';
$cid=$_SESSION['comp_user'];
$jobtitle=$_POST['job_title'];
$city=$_POST['city'];
$type=$_POST['type'];
$category=$_POST['category'];
$desc=$_POST['desc'];
$cdate=$_POST['cdate'];
$exp=$_POST['exp'];
$salary=$_POST['salary'];
$qul=$_POST['qul'];
$newDate = date("y-m-d", strtotime($cdate));


$stmt= $conn->prepare("INSERT INTO post_job (compid, title, city, jobtype, category, description, closingdate,exp,salary,qul) VALUES (:compid,:title,:city,:jobtype,:category,:description,:closingdate,:exp,:sal,:qul)");
   $stmt->bindparam(':compid',$cid);
   $stmt->bindparam(':title',$jobtitle);
   $stmt->bindparam(':city',$city);
   $stmt->bindparam(':jobtype',$type);
   $stmt->bindparam(':category',$category);
   $stmt->bindparam(':description',$desc);
   $stmt->bindparam(':closingdate',$newDate);
   $stmt->bindparam(':exp',$exp);
   $stmt->bindparam(':sal',$salary);
   $stmt->bindparam(':qul',$qul);
   $stmt->execute();
     $z="1";
   header("location:index.php?job=$z");

?>