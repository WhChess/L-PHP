<?php

$int1 = 5;
$str1 = "a>$int1 mi?"; // int1 değişkeni string içerisinde yorumlandı.
$str2 = 'a>$int1 mi?'; // int1 değişkeni yorumlanmadı.

echo "$str1 \n";
echo "$str2";

/*
 * Bu yüzden dikkatli olun. String değer atarken çoğunlukla tek tırnak kullanmanız gerekecek.
 */

?>
