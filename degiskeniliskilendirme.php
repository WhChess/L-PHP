<?php

$hello = 2; // hello = 2
$world = &$hello; // world = 2 ("&" işareti ile bağlantı kurduk.)
echo "\$hello = $hello \n";
echo "\$world = $world \n";
$hello++; // hello = 3, world = 3
echo "\$hello = $hello \n";
echo "\$world = $world";

?>
