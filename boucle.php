<?php foreach ($pronoms as $key => $value) {}
print_r($pronoms_personnels);
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
// foreach ($pronoms_personnels as $pronoms)
// {echo "</br>"."$pronoms";}
$verbe = array(' code' , ' codes' , ' code' , ' codons' , ' codez' , ' codent');

for ($i=0; $i < 6 ; $i++)
{echo "</br>" . "$pronoms_personnels[$i]" . "$verbe[$i]";}
// Construction for
for ($nombre_de_lignes =120; $nombre_de_lignes= 120; $nombre_de_lignes++)
{ 
	echo "Ceci est la ligne n° 26". $nombre_de_lignes= 120. '<br/>';
}
// Construction While
$nombre_de_lignes = 120;
while (nombre_de_lignes = 120)
 {
	echo "nombre_de_lignes. J'affiche que les numéros de 1 à 120. </br/>
	$nombre_de_lignes ++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes = 120.;
}

$class = array (0 => 'Geoffrey',1 => 'Dan', 2 => 'Hugo', 3 => 'Khreshnek', 4 => 'Jimmy', 5 => 'Nadia', 6 => 'Ludovic', 7 => 'Eric', 8 => 'Daniela', 9 => 'Jess', 10 => 'Safia', 11 => 'Daniela', 12 => 'Habib', 13 => 'Thomas', 14 => 'Salvatore', 15 => 'David', 16 => 'Jess', 17 => 'Gabriele');

*// 10 pays du monde

$nom_pays = array('Italy', 'Irlande', 'Suisse', 'Luxembourg', 'Singapour', 'USA', 'Australie', 'Canada', 'France', 'Belgique');

echo "<select name='>". $pays . "'>";
foreach ($nom_pays as $pays){
echo '<option value ="' . $pays . '">' . $pays . '</options>';

}

echo "</select>";

?>

//<!--<form>

<select name = "pays">
<option value="Japon">Japon</option>
<option value="Irlande">Irlande</option>
<option value="Suisse">Suisse</option>
<option value="Singapour">Singapour</option>
<option value="USA">USA</option>
<option value="Australie">Australie</option>
<option value="Canada">Canada</option>
<option value="France">France</option>
<option value="Belgique">Belgique</option>
</select>

</form> -->
</body>
</html>

</html>
