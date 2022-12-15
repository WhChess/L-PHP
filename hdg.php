<?php

// cismin kütlesi (m)
$mass = 10;

// cismin hacmi (V)
$volume = 10;

// cismin yoğunluğunu hesapla
$density = $mass / $volume;

// cismin yüksekliği (h)
$height = 16;

// yerçekimi ivmesi (g)
$gravity = 10;

// cismin basıncını hesapla
$pressure = $height * $density * $gravity;

// sonucu ekrana yazdır
echo "Cismin basıncı: " . $pressure;
