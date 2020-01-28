<?
	$domOBJ = new DOMDocument();
	$domOBJ->load("https://demo-new1.herokuapp.com/rss.php");
	
	$content = $domOBJ ->getElementbyTagName ("movie");
	
?>
<ul>
	<?php
		foreach($content as $data)
		{
			
			$mov_title = $data->getElementsbyTagName("title")->item(0)->nodeValue;
			$mov_actor = $data->getElementsbyTagName("actor")->item(0)->nodeValue;
			$mov_genre = $data->getElementsbyTagName("genre")->item(0)->nodeValue;
			$mov_director = $data->getElementsbyTagName("director")->item(0)->nodeValue;
			
			
			echo"<li>Movie:$movie
			<ul> 	
				<li>$mov_title - Title</li>
				<li>Movie Genre: $mov_genre </li>
			</ul>
			</li>";	
	}
	?>
</ul>
