<?php
if(isset($_SESSION['handler'])){
    $handler = unserialize($_SESSION['handler']);
    $posts = $handler->posts;
    foreach($posts as &$currentPost){
        echo "<p>".$currentPost->username."</p>";
        echo "<p>".$currentPost->text."</p>";
        echo "Publicerat ".$currentPost->date;
        echo "<a href='index.php?delPost=1' class='btn danger'>Radera Inlägg </a>";
        echo "<p style='border-bottom:1px solid black;'></p>";
    }
}
?>
<!--<h2>Inlägg</h2> Example for output data
<p>Namn</p>
<p>Text text text text textText text text text text Text text text text text</p>
Publicerat xxxxx
<a href="index.php?delPost=1" class="btn danger">Radera Inlägg </a>
<p style="border-bottom:1px solid black;"></p>-->