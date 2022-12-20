<?php

// Değişkenler GLOBAL ve LOCAL olmak üzere ikiye ayrılır.
/*
 * Global değişkenler her yerden erişilebilirken,
 * Local değişkenler sadece o fonksiyon içerisinden erişilebilir.
 */
# Örnek vermek gerekirse:
$name = "David";
function getName(){
    global $name;
    # global kelimesi fonksiyon içerisinden fonksiyon dışındaki değişkenlere erişmek için kullanılır.
    echo $name;
}
getName();

?>
