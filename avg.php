<?php
function srednia($parametr1 = 0, $parametr2 = 0)
{
      $wynik = ($parametr1+parametr2)/2;
      return $wynik;
}

$a = 8;
$b = 6;
$wynik = srednia($a,$b);
echo ($wynik);
?>