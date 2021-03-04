<?php
$page_title = "Gästbok";
include("includes/header.php");
include("includes/centerContent.php");
?>

<h1> Andrés gästbok</h1>

<form action="/guestbook/index.php" method="post">
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

</section> <!--End of center content-->
<?php
include("includes/guestInput.php");
include("includes/footer.php");
?>