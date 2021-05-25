<?php
session_start();
include 'connect.php';
  $nm=$_POST["name"];
  $snm=$_POST["surname"];
  $mo=$_POST["mo"];
  $dob=$_POST["bdate"];
  $newdob = date("y-m-d", strtotime($dob));
  $qualification=$_POST["qualification"];
  $passingyear=$_POST["passingyear"];
  $email=$_POST["email"];
  $city=$_POST["city"];
  $sec_que=$_POST["sec_que"];
  $ans=$_POST["ans"];
  $unm=$_POST["username"];
  $pwd=$_POST["password"];
  $con_pwd=$_POST["con_password"];
  $img=$_FILES['img']['name'];
  $fileExt=explode('.',$img);
  $fileActualExt= strtolower(end($fileExt));
  $allowed = array('jpg' ,'jpeg','png');
  if (in_array($fileActualExt, $allowed)) {
  if ($pwd==$con_pwd) { 
   $stmt= $conn->prepare("INSERT INTO user (name,surname,email,city,uname,password,photo,sec_que,ans,mobileno,dob,qualification,passingyear) VALUES (:name,:surname,:email,:city,:uname,:password,:img,:sec_que,:ans,:mobileno,:dob,:qualification,:passingyear)");
   $stmt->bindparam(':name',$nm);
   $stmt->bindparam(':surname',$snm);
   $stmt->bindparam(':email',$email);
   $stmt->bindparam(':city',$city);
   $stmt->bindparam(':uname',$unm);
   $stmt->bindparam(':password',$pwd);
   $stmt->bindparam(':img',$img);
   $stmt->bindparam(':sec_que',$sec_que);
   $stmt->bindparam(':ans',$ans);
   $stmt->bindparam(':mobileno',$mo);
   $stmt->bindparam(':dob',$newdob);
   $stmt->bindparam(':qualification',$qualification);
   $stmt->bindparam(':passingyear',$passingyear);
    move_uploaded_file($_FILES['img']['tmp_name'],"images/users/".$img);
   $stmt->execute();
  if($stmt)
   {
    $stmt1= $conn->prepare("select *from user where (email=:email AND password=:pwd)");
     $stmt1->bindparam(':email',$email);
     $stmt1->bindparam(':pwd',$pwd);
      $stmt1->execute();
       $result=$stmt1->fetch();
       if ($stmt1->rowcount() == 1) 
          $_SESSION["user"]=$result[0];
          header("location:index.php");
   }
 }
 else {
  $a="1";
   header("location:signup.php?pwderror=$a");
 }
}
?>