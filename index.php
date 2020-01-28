<?php
	$domOBJ = new DOMDocument();
	$domOBJ->load("https://xmlexercise1.herokuapp.com/rss.php");
	
	$content = $domOBJ ->getElementbyTagName ("movie");
	
?>
<ul>
	<?php
		foreach($content as $data)
	{?>	
	<div class="border">
		<?php
		
			$id = $data->getElementsbyTagName("id")->item(0)->nodeValue;
			$title = $data->getElementsbyTagName("title")->item(0)->nodeValue;
			$actor = $data->getElementsbyTagName("actor")->item(0)->nodeValue;
			$genre = $data->getElementsbyTagName("genre")->item(0)->nodeValue;
			$director = $data->getElementsbyTagName("director")->item(0)->nodeValue;
			
			
			echo "<li>Movie:$title
			<ul> 	
				<li>Movie Actor: $actor </li>
				<li>Movie Genre: $genre </li>
				<li>Movie Director: $director </li>
			</ul>
			</li>";	
</ul>			
	?>
	</div>
	<?php
		}
?>
