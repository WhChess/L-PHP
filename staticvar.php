<?php
// Normal şartlar altında, tüm fonksiyonlarda kullanılan değişkenler fonksiyon sonrası silinir.
function myTest() {
    static $x = 0; // static $x bu değişkenin fonksiyon sonrası silinmemesi için ön ek olarak koyulur.
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>
