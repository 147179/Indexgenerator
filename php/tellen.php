<?php

$arr_klinkers = array('a', 'o', 'i', 'e', 'u');
$klinkers = 0;
$i = 0;
while($i<$count)
{
    $klinkers = (in_array(strtolower($tekst[$i]), $arr_klinkers)) ? $klinkers + 1 : $klinkers;
    $i++;
}

$arr_letters = range('a', 'z');
$letters = 0;
$k = 0;
while($k<$count)
{
    $letters = (in_array(strtolower($tekst[$k]), $arr_letters)) ? $letters + 1 : $letters;
    $k++;
}

$arr_leestekens = array('.', ',', ':', ';', '"', '|', '-', '{', '}', '!', '?', '~', '&', '*', '$', ')', '(', '=', '+', '[', ']', '%', '_', '@');
$leestekens = 0;
$m = 0;
while($m<$count)
{
    $leestekens = (in_array($tekst[$m], $arr_leestekens)) ? $leestekens + 1 : $leestekens;
    $m++;
}
?>