<?php
$nombre=['Ana','Bernardo','Carmen'];

print "<p>$nombre[1]</p>\n";
print "<p>$nombre[0]</p>\n";

$nombre[1]='David';

print "<p>$nombre[1]</p>\n";

print "<p>$nombre[3]</p>\n";

$apellidos[1]='Garcia';

echo "<p>$apellidos[1]</p>\n";

var_dump($apellidos);

$edades=["Andres" => 20,"Barbara" => 19, "Camilo" => 17];
print "<p> Barbara tiene $edades[Barbara] años</p>\n";

print "<p>Barbar tiene ". $edades["Barbara"] ." años</p>\n";



?>