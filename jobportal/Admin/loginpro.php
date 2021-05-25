<?php
 session_start();
 include 'connect.php';
$email=$_POST["email"];
$pwd=$_POST["pwd"];
  //if (isset($_POST["login"])) 
  //{
  
  		$stmt= $conn->prepare("select *from admin where (email=:email AND password=:pwd)");
  		$stmt->bindparam(':email',$email);
  	    $stmt->bindparam(':pwd',$pwd);
  	    $stmt->execute();
  	 
  	   $result=$stmt->fetch();

  	  

  	     if ($stmt->rowcount() == 1) 
  	     {
              $a=strcmp($email, $result[1]);
		  	       $b=strcmp($pwd, $result[2]);
		  	  if($a==0 AND $b==0)
		  	  {
		  	  	 
		  	  	 $_SESSION["admin"]=$result[0];
		  	  	
              header("location:index.php");
          }
		  	  else
		  	  {
		        	  header("location:login.php");
		  	  	
		  	  }
		  	 
  	     }
         else
         {
          header("location:login.php");
         }
  	    
  	//}
  
  ?>