<?php

$a = 1;
$b = "1";
$c = ($a=="1") && (($b === 1) || ($a == $b)); // (a "1" e eşit mi? (ve) (b 1 ile aynı mı? (veya) a b ye eşit mi?))
// 1 and (0 or 1)
var_dump($c);
var_dump($b === 1);
var_dump($a == "1");
var_dump($a == $b)

?>
