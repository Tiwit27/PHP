<?php
/*1.Budowa pętli for
for (warunek początkowy; warunek; warunek modyfikujący) 
{  
    instrukcja
}
*/
//Wyrażenie modyfikujące w bloku instrukcji
for($i = 1;$i <= 10;)
{
    echo $i;
    $i++;
}
echo "<br>";
//Łączenie wyrażenia warunkowego i modyfikującego
for($i = 1;$i++ <= 10;)
{
    echo $i;
}
echo "<br>";
//Wyrażenie początkowe przed pętlą
$i = 1;
for(;$i<=10;)
{
    echo $i;
    $i++;
}
echo "<br>";
//Pętla bez wyrażeń
$i = 1;
for(;;)
{
    echo $i;
    if($i++ >= 10) break;
}
echo "<br>";
//Zastosowanie instrukcji continue
for($i = 1;$i <= 20; $i++)
{
    if($i % 2 == 0)
    {
        continue;
    }
    echo $i;
}
echo "<br>";

//zadanie 1. pętla for ma zliczać od 5 do 50 ale wszystkie warunki pętli są poza nią

$z = 5;
for(;;)
{
    if($z > 50)
    {
        break;
    }
    echo $z." ";
    $z++;
}
?>