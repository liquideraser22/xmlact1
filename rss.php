<?php

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820359") or die (mysqli_error($connect));
$sql = "SELECT * FROM tbl_movies";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

while($record= mysqli_fetch_assoc($query)) {
	extract($record);
	
	$rss .= '<movie>';
	$rss .= '<id>' . $mov_id .'</id>';
	$rss .= '<title>' . $mov_title .'</title>';
	$rss .= '<actor>' . $mov_actor .'</actor>';
	$rss .= '<genre>' . $mov_genre .'</genre>';
	$rss .= '<director>' . $mov_director .'</director>';
	$rss .= '</movie>';
	
}
$rss .= '</channel>';
$rss .= '</rss>';


echo$rss;
?>	
	
