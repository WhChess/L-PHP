<?php

define("PI",pi());
$cember_cap = 10;
$alan = PI * ($cember_cap * $cember_cap * (0.25));
$str_to_print = <<<EOT
Çemberin alanı: $alan
EOT;
echo $str_to_print;

?>
