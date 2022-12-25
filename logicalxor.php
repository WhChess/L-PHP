<?php
// logical operators: xor
$x = true;
$y = false;
// either $x or $y is true, but not both.
$a = ($x) xor ($y);
var_dump($a);

?>
