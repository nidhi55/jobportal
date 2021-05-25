<?php  

$id=$_POST['id'];
$heading=$_POST['heading'];
$subheading=$_POST['subheading'];
$img=$_FILES["image"]["name"];

include 'connect.php';
if($img=="")
{
	$temp="update slider set heading=:heading,subheading=:subheading where id=:id";
	$flg=0;
}
else
{
	$temp="update slider set image=:image,heading=:heading,subheading=:subheading where id=:id";
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$img );
	$flg=1;
}

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':heading',$heading);
$stmt->bindparam(':subheading',$subheading);
if ($flg==1) 
{
	$stmt->bindparam(':image',$img);
}
$result=$stmt->execute();
if ($result) 
{
	header("location:slider1.php");
	
}

?>