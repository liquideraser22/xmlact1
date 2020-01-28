<?php 
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820359");
    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }

    $sql = "SELECT * FROM tbl_movies ORDER BY mov_id DESC LIMIT 20";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){
        $title = $r['mov_title'];
        $actor = $r['mov_actor'];
        $genre = $r['mov_genre'];
        $director = $r['mov_director'];
        
        echo "<movie>
        <title>$title</title>
        <actor>$actor</actor>
        <genre>$genre</genre>
        <director>$director</director>
        </movie>";
    }
    echo "</channel></rss>";
?>
