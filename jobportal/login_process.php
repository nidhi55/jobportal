<?php
 session_start();
 include 'connect.php';
  $check=$_POST["r1"];
  $email=$_POST["email"];
  $pwd=$_POST["password"];
  if (isset($_POST['jid'])) {
  $jid=$_POST['jid'];
  $flag=$_POST['flag'];
  }
  
  if (isset($_POST["login"])) 
  {
  	 if ($check==1)
   {
  	  $stmt= $conn->prepare("select *from comp_user where (email=:email AND password=:pwd)");
  	  $stmt->bindparam(':email',$email);
  	  $stmt->bindparam(':pwd',$pwd);
  	  $stmt->execute();
  	  $result=$stmt->fetch();

  	  

  	     if ($stmt->rowcount() == 1) 
  	     {
              $v1=strcmp($email, $result[4]);
		  	  $v2=strcmp($pwd, $result[5]);
		  	  if($v1==0 AND $v2==0)
		  	  {
		  	  	 
		  	  	 $_SESSION["comp_user"]=$result[0];
		  	  		$a=1;
              header("location:index.php?login=$a");
          }
		  	  else
		  	  {
		  	  	$a=2;
		  	  	 header("location:index.php?login=$a");
		  	  }
		  	 
  	     }
  	     else
  	     {
  	     	$a=2;
		  	  	 header("location:index.php?login=$a");
  	     }
  }
 else if($check==2)
 {
   $stmt1= $conn->prepare("select *from user where (email=:email AND password=:pwd)");
     $stmt1->bindparam(':email',$email);
     $stmt1->bindparam(':pwd',$pwd);
  	  $stmt1->execute();
  	   $result=$stmt1->fetch();
  	     if ($stmt1->rowcount() == 1) 
  	     {
               $v1=strcmp($email, $result[3]);
		  	  $v2=strcmp($pwd, $result[6]);
		  	  if($v1==0 AND $v2==0)
		  	  {
		  	  	 $a=1;
		  	  	
             $_SESSION["user"]=$result[0];
              if($jid!=0){
                if ($flag==1) {
                  header("location:index.php?jid=$jid");
                }if ($flag==0) {
                  
                header("location:jobs.php?jid=$jid");
              }
              }
             else{
             header("location:index.php?login=$a");
            }
		  	  }
		  	  else
		  	  {
		  	  	$a=2;
		  	  	 header("location:index.php?login=$a");
		  	  }

  	     }
  	     else
  	     {
  	     	$a=2;
		  	  	 header("location:index.php?login=$a");
  	     }	
 }
  }
  
?>