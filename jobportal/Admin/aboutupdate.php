<?php  

$id=$_POST['id'];
$content=$_POST['content'];
$subcontent=$_POST['subcontent'];
$vid=$_FILES["video"]["name"];
include 'connect.php';
if($vid=="")
{
	$temp="update about set content=:content,subcontent=:subcontent where id=:id";
	$flg=0;
}
else
{
	$temp="update about set video=:vid,content=:content,subcontent=:subcontent where id=:id";
	move_uploaded_file($_FILES['video']['tmp_name'],"../images/video/".$vid);
	$flg=1;
}

$stmt=$conn->prepare($temp);
$stmt->bindparam(':id',$id);
$stmt->bindparam(':content',$content);
$stmt->bindparam(':subcontent',$subcontent);
if ($flg==1) {
	$stmt->bindparam(':vid',$vid);
}
$result=$stmt->execute();
if ($result) 
{
	header("location:about.php");
	//echo "$";
	
}

?>