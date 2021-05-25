<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'connect.php';

    $stmt= $conn->prepare("select *from about");
	$stmt->execute();
	$result=$stmt->fetch();
	?>
 <video width="600" height="450" controls="controls">
<source src="images/video/<?php echo $result[3]; ?>" type="video/mp4"></video>
</body>
</html>