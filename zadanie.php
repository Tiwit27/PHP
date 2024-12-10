<?php
//zad 2
//sprawdz czy liczba a jest maksymalna spośród 2 liczb a jeśli tak to oblicz pole trójkąta
$a = 11;
$b = 7;
if($a == $b)
{
    echo "Liczby są równe";
}
else if($a > $b)
{
    $c = ($a*$b)/2;
    echo $c;
}
else
{
    echo "Liczba b jest większa";
}

?>