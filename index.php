<?php
 include 'data.php';
 

?>
<html>
<body>
	  <head>
	  	<title></title>
	  </head>
<form method="post" enctype="multipart/form-data">
	
	<label> select Image</label>
	<input type="file" name="image">
	<input type="submit" name="submit" value="upload the picture">
</form>

</body>
</html>

<?php
 if($_POST['submit']){
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "gallary/".$filename;
move_uploaded_file($tempname, $folder);

if($filename!="")
{
	$query = "insert into picture values('$folder')";
	$data= mysql_query($query);

	if($data){
		echo "inserted";
	}
}
	else{
		echo "not";
	}
}

 ?>
