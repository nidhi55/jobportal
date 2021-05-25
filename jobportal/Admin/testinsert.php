<?php  
include 'connect.php';

$name=$_POST['name'];
$desc=$_POST['desc'];
$cnm=$_POST['cname'];
$img=$_FILES["image"]["name"];

move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$img );

$stmt=$conn->prepare("insert into testimonial(img,description,name,comp_name) values(:image,:desc,:name,:cname)"); 
$stmt->bindparam(':image',$img);
$stmt->bindparam(':desc',$desc);
$stmt->bindparam(':name',$name);
$stmt->bindparam(':cname',$cnm);
$result=$stmt->execute();
if ($result) 
{
	header("location:testimonial.php");
	
}

?>