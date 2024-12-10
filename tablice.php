<?php
//deklaracja tablicy
$tablica = array();
//wdrażanie wartości do tablicy
$tablica = array(1,2,3,4,5,6,7,8,9,10);
//wyprowadzanie zmiennych z tabeli wraz z indexami
print_r($tablica);
echo "<br>";
//Wyprowadzanie zmiennych z tabeli bez indexów
for($i = 0;$i<count($tablica);$i++)
{
    echo $tablica[$i]." ";
}
//wdrożenie do tablicy z łańcuchami znaków
$zwierzeta = array('kot', 'pies', 'mysz', 'biedronka');
echo "<br>".$zwierzeta[2];
//wprowadzenie i wyprowadzenie danych po przez pętlę for
$tab = array();
for($i = 0;$i < 10; $i++)
{
    $tab[$i] = $i + 1;
}
for($i = 0;$i < count($tab); $i++)
{
    echo "<br>".$tab[$i]." ";
}
?>