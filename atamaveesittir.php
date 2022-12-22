<?php
$a = "Hello! ";
$b = "World.";
echo $a.$b; // Hello! World. atama operatörü.
echo "\n";
echo $a.=$b;  // Hello! World. atama-eşittir. artık $a = "Hello! World."
echo "\n";
echo $a;
$c = 5;
$d = 4;
$c *= 3; # c = 15;
$d %= 2; # d = 0;
echo "\n";
echo "c=".$c." "."d=".$d;
?>
