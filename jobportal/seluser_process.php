<?php
session_start();
include 'connect.php';
  $uid=$_POST['uid'];
  $jobid=$_POST['jid'];
  $md=$_POST['md'];
  $newDate = date("y-m-d", strtotime($md));
  $stmt= $conn->prepare("INSERT INTO selected_user (user_id,job_id,meeting_date) VALUES (:uid,:jid,:md)");
  $stmt->bindparam(':uid',$uid);
  $stmt->bindparam(':jid',$jobid);
  $stmt->bindparam(':md',$newDate);
  $stmt->execute();
  
  header("location:candidates.php");
   
?>  