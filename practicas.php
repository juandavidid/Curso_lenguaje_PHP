<?php

$a = array(1,2,array("a","b","c"));
echo var_dump($a)."<br />";


$b =3.1;
$c=true;
echo var_dump($b,$c)."<br />";

$data = array(1,1,NULL,new stdClass,'foo');
echo gettype($data)."<br/>";
echo var_dump($data)

?>