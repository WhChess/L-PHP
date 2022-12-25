<?php
$a = 2.10;
$b = 2;
$c = NULL;
$d = 1.9e411;
$e = "14";
$f = true;
$a = is_float($a); // Float olup olmadığını kontrol eder.
$b = is_int($b); // Integer olup olmadığını kontrol eder.
$c = is_nan($a); // Is_Not_A_Number olup olmadığını kontrol eder.
$cx = is_nan($c);
$d = is_infinite($d); // Sonsuzluk ifade eden sayı olup olmadığını kontrol eder.
$e = is_numeric($e);  // Numerik olup olmadığını kontrol eder.

echo gettype($a), gettype($b), gettype($c), gettype($cx), gettype($d), gettype($e);

?>
