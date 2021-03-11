<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../classes/dbHandler.php');
include('../classes/post.php');
session_start();
$Shop = null;
if(isset($_SESSION['dbHandler'])){
    $Shop = unserialize($_SESSION['dbHandler']);
}
else{
    $Shop = new dbHandler();
    $Shop->fetchPosts();
}
if(isset($_REQUEST['author']) && isset($_REQUEST['message'])){
    if(strlen($_REQUEST['author']) > 0 && strlen($_REQUEST['message']) > 0){
        $Shop->addPost(new Post($_REQUEST['author'], $_REQUEST['message'], date('m/d/Y H:i:s', time())));
        $_SESSION['dbHandler'] = serialize($Shop);
    }
}
header("location: ../dbGuest.php");
?>