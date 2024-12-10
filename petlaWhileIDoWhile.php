<?php
//zad 1. Za pomocą pętli while która pracuje w zakrsie od 0 do 100 wyświetl liczby parzyste (instukcja warunkowa)
//zad 2. Pętla do while która pracuje w zakresie od 100 do 0, wyświetl wszytskie liczby podzilne przez 3, instukcja warunkowa

//zad 1.
$i = 0;
while($i <= 100)
{
    if($i % 2 == 0)
    {
        echo $i." ";
    }
    $i++;
}
echo "<br>";
$i1 = 100;
//zad 2.
do
{
    if($i1 % 3 == 0)
    {
        echo $i1." ";
    }
    $i1--;
}while($i1 >= 0)
?>