<?php
session_start();
include 'connect.php';
 $nm=$_POST["ur_name"];
 $snm=$_POST["ur_surname"];
 $cmp=$_POST["ur_company"];
 $mo=$_POST["mo"];
 $email=$_POST["ur_email"];
 $sec_que=$_POST["ur_sec_que"];
  $ans=$_POST["ur_ans"];
 $pwd=$_POST["ur_password"];
 $con_pwd=$_POST["con_ur_password"];
 $logo=$_FILES['logo']['name'];
  $fileExt=explode('.',$logo);
  $fileActualExt= strtolower(end($fileExt));
  $allowed = array('jpg' ,'jpeg','png');
  if (in_array($fileActualExt, $allowed)) {
 if ($pwd==$con_pwd) {      
    $stmt= $conn->prepare("INSERT INTO comp_user (name,surname,comp_nm,email,password,logo,sec_que,ans,mobileno) VALUES (:name,:surname,:comp_nm,:email,:password,:logo,:sec_que,:ans,:mobileno)");
    $stmt->bindparam(':name',$nm);
    $stmt->bindparam(':surname',$snm);
    $stmt->bindparam(':comp_nm',$cmp);
    $stmt->bindparam(':mobileno',$mo);
    $stmt->bindparam(':email',$email);
    $stmt->bindparam(':password',$pwd);
    $stmt->bindparam(':logo',$logo);
    $stmt->bindparam(':sec_que',$sec_que);
    $stmt->bindparam(':ans',$ans);
    move_uploaded_file($_FILES['logo']['tmp_name'],"images/users/".$logo);
    $stmt->execute();
    if ($stmt) 
   {
   	 $stmt1= $conn->prepare("select * from comp_user where (email=:email AND password=:pwd)");
  	  $stmt1->bindparam(':email',$email);
  	  $stmt1->bindparam(':pwd',$pwd);
  	  $stmt1->execute();
  	  $result1=$stmt1->fetch();
  	  if ($stmt1->rowcount() == 1) 
  	  
   	 	$_SESSION["comp_user"]=$result1[0];
   	    header("location:index.php");
   }
  }else {
    $a="1";
    header("location:signup.php?pwderror=$a");
  }
}
?>