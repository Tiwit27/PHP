<?php
//https://www.medianauka.pl/tablice-php
$tablica = array();
for($i=0; $i < 10; $i++)
{
    for($j=0; $j < 10; $j++)
    {
        $tablica[$i][$j] = 0;
    }
}
for($i=0; $i < 10; $i++)
{
    for($j=0; $j < 10; $j++)
    {
        echo $tablica[$i][$j]." ";
    }
    echo "<br>";
}
?>