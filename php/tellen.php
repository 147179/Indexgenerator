<?php

$tekst = $_POST['tekst']; 

$count = strlen($tekst);

$woorden   = str_word_count($tekst);

$klinkers = 0;
$i = 0;
while($i<$count)
{
    if($tekst[$i]=='a' || $tekst[$i]=='A' ) $klinkers++ ;
    if($tekst[$i]=='o' || $tekst[$i]=='O' ) $klinkers++ ;
    if($tekst[$i]=='i' || $tekst[$i]=='I' ) $klinkers++ ;
    if($tekst[$i]=='e' || $tekst[$i]=='E' ) $klinkers++ ;
    if($tekst[$i]=='u' || $tekst[$i]=='U' ) $klinkers++ ;
    $i++;
}

$letters = 0;
$k = 0;
while($k<$count)
{
    if($tekst[$k]=='a' || $tekst[$k]=='n' ) $letters++ ;
    if($tekst[$k]=='b' || $tekst[$k]=='o' ) $letters++ ;
    if($tekst[$k]=='c' || $tekst[$k]=='p' ) $letters++ ;
    if($tekst[$k]=='d' || $tekst[$k]=='q' ) $letters++ ;
    if($tekst[$k]=='e' || $tekst[$k]=='r' ) $letters++ ;
    if($tekst[$k]=='f' || $tekst[$k]=='s' ) $letters++ ;
    if($tekst[$k]=='g' || $tekst[$k]=='t' ) $letters++ ;
    if($tekst[$k]=='h' || $tekst[$k]=='u' ) $letters++ ;
    if($tekst[$k]=='i' || $tekst[$k]=='v' ) $letters++ ;
    if($tekst[$k]=='j' || $tekst[$k]=='w' ) $letters++ ;
    if($tekst[$k]=='k' || $tekst[$k]=='x' ) $letters++ ;
    if($tekst[$k]=='l' || $tekst[$k]=='y' ) $letters++ ;
    if($tekst[$k]=='m' || $tekst[$k]=='z' ) $letters++ ;
    if($tekst[$k]=='A' || $tekst[$k]=='N' ) $letters++ ;
    if($tekst[$k]=='B' || $tekst[$k]=='O' ) $letters++ ;
    if($tekst[$k]=='C' || $tekst[$k]=='P' ) $letters++ ;
    if($tekst[$k]=='D' || $tekst[$k]=='Q' ) $letters++ ;
    if($tekst[$k]=='E' || $tekst[$k]=='R' ) $letters++ ;
    if($tekst[$k]=='F' || $tekst[$k]=='S' ) $letters++ ;
    if($tekst[$k]=='G' || $tekst[$k]=='T' ) $letters++ ;
    if($tekst[$k]=='H' || $tekst[$k]=='U' ) $letters++ ;
    if($tekst[$k]=='I' || $tekst[$k]=='V' ) $letters++ ;
    if($tekst[$k]=='J' || $tekst[$k]=='W' ) $letters++ ;
    if($tekst[$k]=='K' || $tekst[$k]=='X' ) $letters++ ;
    if($tekst[$k]=='L' || $tekst[$k]=='Y' ) $letters++ ;
    if($tekst[$k]=='M' || $tekst[$k]=='Z' ) $letters++ ;
    $k++;
}

$leestekens = 0;
$m = 0;
while($m<$count)
{
    if($tekst[$m]=='.' || $tekst[$m]==',' ) $leestekens++ ;
    if($tekst[$m]==':' || $tekst[$m]==';' ) $leestekens++ ;
    if($tekst[$m]=='"' || $tekst[$m]=='|' ) $leestekens++ ;
    if($tekst[$m]=='-' || $tekst[$m]=='{' ) $leestekens++ ;
    if($tekst[$m]=='}' || $tekst[$m]=='!' ) $leestekens++ ;
    if($tekst[$m]=='?' || $tekst[$m]=='~' ) $leestekens++ ;
    if($tekst[$m]=='&' || $tekst[$m]=='*' ) $leestekens++ ;
    if($tekst[$m]=='$' || $tekst[$m]==')' ) $leestekens++ ;
    if($tekst[$m]=='(' || $tekst[$m]=='=' ) $leestekens++ ;
    if($tekst[$m]=='+' || $tekst[$m]=='[' ) $leestekens++ ;
    if($tekst[$m]==']' || $tekst[$m]=='%' ) $leestekens++ ;
    if($tekst[$m]=='_' || $tekst[$m]=='@' ) $leestekens++ ;
    $m++;
}

echo "Gevonden in de tekst:<br>";                
echo "" . $letters . " letters<br>";
echo "" . $klinkers . "  klinkers<br>";
echo "" . $woorden . " woorden<br>";
echo "" . $leestekens . " leestekens<br>";
echo "" . $count . " tekens<br>";

?>