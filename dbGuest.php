<?php
session_start();
$page_title = "Gästbok Databas";
include("includes/header.php");
include("config/Dbconfig.php");
include('classes/dbHandler.php');
include('classes/post.php');
if(isset($_GET['delPost'])){
    include("functions/deletePost.php");
}
if(!isset($_SESSION['dbHandler'])){
    $dbHandler = new dbHandler();
    $dbHandler->fetchPosts();
    $_SESSION['dbHandler'] = serialize($dbHandler);
}
if(isset($_GET['delPostDb']) && isset($_SESSION['dbHandler'])){
    $dbHandler = unserialize($_SESSION['dbHandler']);
    $dbHandler->deletePost($_GET['delPostDb']);
    $_SESSION['dbHandler'] = serialize($dbHandler);
}
?>
<section id="centercontent">
<h1> Andrés gästbok</h1>

<form action="functions/addPostDb.php" method="post">
<p>
Namn: <br><input type="text" name="author">
</p>
<p>
Meddelande:<br> <textarea cols="40" rows="2" name="message"></textarea>
</p>
<p>
<input type="submit" name="addPost" value="Skapa Inlägg" class="btn">
</p>
</form>
<?php
if(isset($_SESSION['dbHandler'])){
    $dbHandler = unserialize($_SESSION['dbHandler']);
    $dbHandler->showPosts();
}
echo "</section>";
include("includes/footer.php");
?>