<?php include("includes/config.php"); 
session_start();
if (!isset($_SESSION["uname"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <title><?= $site_title . $divider . $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stilmall.css" type="text/css">
</head>
<body>
    <div id="container">
        <header id="mainheader">
            <!--<h1>PHP Struktur</h1>-->
            <nav id="mainmenu">
                <ul>
                    <li><a href="index.php">Hem</a></li>
                    <li><a href="omsidan.php">Del 3</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="functions/logout.php">Logga ut</a></li>
                </ul>
            </nav>
        </header>

        <section id="leftcontent">