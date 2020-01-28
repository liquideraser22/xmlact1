<style>

    .content{
        display: flex;
        justify-content: center;
    }
    .wrap{
        display: flex;
        flex-direction: column;
        border: 1px solid black;
        width: 30rem;
    }
    .border{
        border: 1px solid black;
        max-width: 40rem;
    }
</style>

<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlexercise1.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("movie");
?>
 <div class="content">
 <h1>Movies</h1>
 </div>
 <div class="content">

 <div class="wrap">
 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $actor = $data->getElementsByTagName("actor")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     $director = $data->getElementsByTagName("director")->item(0)->nodeValue;
     echo "<ul><h2>$title - $actor</h2>
              <ul>
                  <li>genre: $genre </li>
                  <li>director: $director </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
