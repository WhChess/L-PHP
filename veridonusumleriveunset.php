<?php

// Veri Dönüşümleri:
$a = (int) '1'; // integer veri tipine dönüşüm.
$b = (float) '1.9'; // float veri tipine dönüşüm.
$c = (bool) '0'; // boolean veri tipine dönüşüm.
// $d = (unset) 'hello'; // NO LONGER SUPPORTED. Artık null veri tipine "unset" şekliyle dönüşüm kaldırıldı.
$e = 10;
unset($e);
$e = null; // Onun yerine veri tipi bu şekilde NULL yapılabilir.
echo "$a \t"; // 1
echo "$b \t"; // 1.9
echo "$c \t"; // ""
echo "$e"; // null

?>
