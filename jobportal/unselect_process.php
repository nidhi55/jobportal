<?php
include 'connect.php';

	$uid=$_GET['uid'];
	$jid=$_GET['jid'];
	
	$stm=$conn->prepare("DELETE FROM selected_user WHERE user_id=:uid And job_id=:jid");
	$stm->bindparam(':uid',$uid);
    $stm->bindparam(':jid',$jid);
    $stm->execute();
    
   header("location:candidates_user.php?title=$jid");

?>