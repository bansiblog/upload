<?php

include 'data.php';
error_reporting(0);
$query = "select * from picture";
$data = mysql_query($query);
$total = mysql_num_rows($data);

if($total !=0){
	while($result=mysql_fetch_assoc($data)){
		echo "<img src=' ".$result['picsource']."'height='400' width='400'>";
	}
}
else{
	echo "no found";
}

?>