<?php
echo strlen("Hello world!"); // String'in uzunluğunu ölçer. Output: 12
echo "\n";
echo str_word_count("Hello world!"); // String'in kelime uzunluğunu ölçer. Output: 2
echo "\n";
echo strrev("Hello world!"); // String'i terse çevirir. outputs !dlrow olleH
echo "\n";
echo strpos("Hello world!", "w"); // String'in içini verilen tırnaktaki harf veya kelimenin hangi indiste olduğunu arar. outputs 6
// ilk indis 0'dır.
echo "\n";
echo str_replace("world", "Dolly", "Hello world!"); // String'in içinde yer değişimi yapma. outputs Hello Dolly!
// world kelimesini "Dolly" kelimesi ile değiştirdi.

?>
