<?php
/*
 * "===" VERİ TİPLERİ DAHİL EŞİT DEMEK. AYNIDIR.
 * "==" SADECE GÖRÜNÜŞLERİ EŞİT OLSA YETERLİDİR. EŞİTTİR.
 * "!=" EŞİT DEĞİLDİR.
 * "!==" AYNI DEĞİLDİR.
 */
$x = "2";
$y = 2;
var_dump($x==$y); // True
var_dump($x===$y); // False
var_dump($x!=$y); // False
var_dump($x!==$y); // True
