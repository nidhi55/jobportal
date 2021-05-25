<?php  

$id=$_POST['id'];
$desc=$_POST['desc'];
$name=$_POST['name'];
$cname=$_POST['cname'];
$img=$_FILES["image"]["name"];
include 'connect.php';
if($img=="")
{
	$temp="update testimonial set name=:name,comp_name=:cname,description=:desc where id=:id";
	$flg=0;
}
else
{
	$temp="update slider set image=:img,name=:name,comp_name=:cname,description=:desc where id=:id";
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$img );
	/*move_uploaded_file($_FILES['image']['tmp_name'],"images/".$img );*/
	$flg=1;
}

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':name',$name);
$stmt->bindparam(':cname',$cname);
$stmt->bindparam(':desc',$desc);
if ($flg==1) {
	$stmt->bindparam(':image',$img);
}
$result=$stmt->execute();
if ($result) 
{
	header("location:testimonial.php");
	
}

?>