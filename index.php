<?
	$domOBJ = new DOMDocument();
	$domOBJ->load("https://demo-new1.herokuapp.com/index.php");
	
	$content = $domOBJ ->getElementbyTagName ("movie");
	
?>
<ul>
	<?php
		foreach($content as $data)
		{
			
			$mov_title = $data->getElementsbyTagName("movie title")->item(0)->nodeValue;
			$mov_actor = $data->getElementsbyTagName("movie actor")->item(0)->nodeValue;
			$mov_genre = $data->getElementsbyTagName("movie genre")->item(0)->nodeValue;
			$mov_director = $data->getElementsbyTagName("movie director")->item(0)->nodeValue;
			
			
			echo"<li>Movie:$movie
			<ul> 	
				<li>$mov_title - Title</li>
				<li>Movie Genre: $mov_genre </li>
			</ul>
			</li>";	
	}
	?>
</ul>