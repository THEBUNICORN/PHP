<pre>
<?php echo print_r($_GET)?>
</pre>

Sexe:
<form method="get">
homme<input type="radio" name="genre" value="homme">
femme <input type="radio" name="genre" value="femme">
<p>
<input type="submit" name="envoyer" value="submit">
</p>
</form>

<?php
$genre = $_GET['genre'];
echo 'Bonjour ' .($genre == femme ? 'femme' : 'homme');
?>
