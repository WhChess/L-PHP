<?php
define("PI", pi()); // pi() Pi sayısı.
echo PI;
echo "\n";
echo(min(0, 150, 30, 20, -8, -200));  // Listenin en küçük değerini gösterir. returns -200.
echo "\n";
echo(max(0, 150, 30, 20, -8, -200));  // Listenin en büyük değerini gösterir. returns 150.
$a = -10;
$a = abs($a); // abs() fonksiyonu değeri pozitif yapar.
echo "\n";
echo $a;
echo "\n";
echo sqrt(64); // sqrt() karekök değeri alır.
echo "\n";
echo(round(0.60));  // Yuvarlama işlemi. returns 1.
echo "\n";
echo(round(0.49));  // Yuvarlama işlemi. returns 0.
echo "\n";
echo(rand()); // rand() - Rastgele sayı üret.
echo "\n";
echo(rand(10, 100)); // 10 ile 100 arasında sayı üret. 10 ve 100 dahil.
?>
