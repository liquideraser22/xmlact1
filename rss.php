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
	$rss .= '<movie title>' . $mov_title .'</movie title>';
	$rss .= '<movie actor>' . $mov_actor .'</movie actor>';
	$rss .= '<movie genre>' . $mov_genre .'</movie genre>';
	$rss .= '<movie director>' . $mov_director .'</movie director>';
	$rss .= '</movie>';
	
}
$rss .= '</channel>';
$rss .= '</rss>';


echo$rss;
?>	
	