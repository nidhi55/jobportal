<?php
include 'connect.php';
$user=$_POST['r1'];
$email=$_POST['email'];
$psw=$_POST['password'];
$que=$_POST['ur_sec_que'];
$ans=$_POST['ans'];


if ($user=="1") 
{
	
	$stmt= $conn->prepare("select * from comp_user where email=:email");

  	  $stmt->bindparam(':email',$email);
  	  
  	  $stmt->execute();
  	  $result=$stmt->fetch();
  	  $question=$result[7];
  	  $answer=$result[8];
  	  
  	  
  	  if($que==$question AND $ans==$answer)
  	  {
	     $sql = "UPDATE comp_user SET password=:psw WHERE email=:email";

    	// Prepare statement
    	$stmt = $conn->prepare($sql);
    
    	$stmt->bindparam(':email',$email);
  	    $stmt->bindparam(':psw',$psw);


    	// execute the query
    	$stmt->execute();
    	echo $stmt->rowCount() . " records UPDATED successfully";
		}
		else
		{
			echo"your question or answer not matching with our database";
		}
    // echo a message to say the UPDATE succeeded
 
}

if ($user=="2") 
{
	$stmt= $conn->prepare("select * from user where email=:email");

  	  $stmt->bindparam(':email',$email);
  	  $stmt->execute();
  	  $result=$stmt->fetch();
  	  $question=$result[8];
  	  $answer=$result[9];
  	  
  	if ($que==$question AND $ans==$answer) 
  	{
  		# code...
  	

 		$sql = "UPDATE user SET password=:psw WHERE email=:email";

    	// Prepare statement
    	$stmt = $conn->prepare($sql);
    
    	$stmt->bindparam(':email',$email);
    	$stmt->bindparam(':psw',$psw);

  	  	$stmt->execute();

    	// echo a message to say the UPDATE succeeded
    	echo $stmt->rowCount() . " records UPDATED successfully";
	}
	else
	{
		echo"your question or answer not matching with our database";
	}
}

?>