<?php
define("g",10);
$hacim = 10;
$yukseklik_h = 16;
$kutle = 10;
$basinc = ($kutle/$hacim) * g * $yukseklik_h;
echo $basinc;
echo " Pascal,";
echo " ";
echo var_dump($basinc);
echo " ";
echo var_dump($kutle=="10");
echo " ";
echo var_dump($kutle==10);
echo " ";
echo var_dump($kutle === 10);
echo " ";
echo var_dump($kutle === "10");
