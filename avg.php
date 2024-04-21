<?php
function srednia($parametr1 = 0, $parametr2 = 0)
{
    $wynik = ($parametr1 + $parametr2) / 2;
    return $wynik;
}

function srednia_wazona($parametr1 = 0, $waga1 = 1, $parametr2 = 0, $waga2 = 1)
{
    $suma_wag = $waga1 + $waga2;
    $wynik = ($parametr1 * $waga1 + $parametr2 * $waga2) / $suma_wag;
    return $wynik;
}

$a = 8;
$b = 6;
$wynik_sredniej = srednia($a, $b);
echo "Srednia arytmetyczna: " . $wynik_sredniej . "<br>";

$wynik_sredniej_wazonej = srednia_wazona($a, 3, $b, 2);
echo "Srednia wazona: " . $wynik_sredniej_wazonej;
?>
