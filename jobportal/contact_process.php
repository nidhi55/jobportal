<?php
session_start();  
include "connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['sub'];
$msg=$_POST['msg'];

 $stmt= $conn->prepare("INSERT INTO feedback (name,email,subject,msg) VALUES (:name,:email,:subject,:msg)");
   $stmt->bindparam(':name',$name);
   $stmt->bindparam(':email',$email);
   $stmt->bindparam(':subject',$subject);
   $stmt->bindparam(':msg',$msg);
   $stmt->execute();
   if ($stmt) 
   {
   	 echo "Thankyou for feedback";
   	 $a=1;
   	 header("location:contact.php?temp=$a");
   }

?>