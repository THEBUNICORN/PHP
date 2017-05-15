<pre>
<?php echo print_r($_GET) ?>x
</pre>

<form method="get">
<input type="number" name="age" placeholder="Quel est ton age?">
<p>
<input type="radio" name="sexe" value="homme">Homme
<input type="radio" name="sexe" value="femme">Femme
</p>
Parles-tu anglais?
<p>
<input type="radio" name="anglais" value="yes">yes
<input type="radio" name="anglais" value="no">no
</p>
<input type="submit" name="Send" value="Envoyer">
<p>
<a href="http://localhost:8000/conditions.php?">refresh</a>
</p>
</form>

<?php
//Propriété
$heure = (date('H'));
$age = $_GET['age'];
$sexe = $_GET['sexe'];
$anglais = $_GET['anglais'];

//premier exercice_ok
if ($heure >= 5 && $heure <= 9)
{echo "Bonjour!";}
elseif ($heure >= 9 && $heure <12)
{echo "Bonne journée!";}
elseif ($heure >= 12 && $heure < 16)
{echo "Bon après-midi!";}
elseif ($heure >= 16 && $heure <= 21)
{echo "Bonne soirée!";}
elseif ($heure >= 21 && $heure <= 5)
{echo "Bonne nuit!";}

//Test_age+langue_pas_ok
//0-12 ans
if ($age <=12 AND $sexe == "homme" AND $anglais == "no" )
{echo "Salut petit !";}
if ($age <=12 AND $sexe == "femme" AND $anglais == "no")
{echo "Salut petite !";}
if ($age <=12 AND $sexe == "homme" AND $anglais == "yes" )
{echo "Hello boy !";}
if ($age <=12 AND $sexe == "femme" AND $anglais == "yes" )
{echo "Hello girl !";}

//12-18 ans
if ($age <=18 AND $sexe == "homme" AND $anglais == "no" )
{echo "Salut l'adolescent !";}
if ($age <=18 AND $sexe == "homme" AND $anglais == "yes")
{echo "Hello Teenage boy !";}
if ($age <=18 AND $sexe == "femme" AND $anglais == "no")
{echo "Hello l'adolescente !";}
if ($age <=18 AND $sexe == "femme" AND $anglais == "yes")
{echo "Hello Teenage girl !";}

//18-115ans

if  ($age >18 AND $sexe == "homme" AND $anglais == "no")
  {echo "Salut monsieur";}
if  ($age >18 AND $sexe == "homme" AND $anglais == "yes")
  {echo "Hi Sir!";}
if  ($age >18 AND $sexe == "femme" AND $anglais == "no")
  {echo "Salut madame!";}
if  ($age >18 AND $sexe == "femme" AND $anglais == "yes")
  {echo "Hi Lady!";}
//115ans+

if      ($age >=115 AND $sexe == "homme" AND $anglais == "no")
  {echo "Wow! Toujours vivante, vieil homme?";}
if      ($age >=115 AND $sexe == "homme" AND $anglais == "yes")
  {echo "Wow! Still alive, old man?";}
if      ($age >=115 AND $sexe == "femme" AND $anglais == "no")
  {echo "Wow! Toujours vivante, vieille femme?";}
if      ($age >=115 AND $sexe == "femme" AND $anglais == "yes")
  {echo "Wow! Still alive, old lady?";}
//paragraphe au dessus n'est pas fini

?>
