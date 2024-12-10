<?php
//z testu z informatyki Niedziela został zakwalfikowany do kategorii od 0 do 10 ndst, od 11 do 20 poprawny, od 21 do 30 dobry, od 31 do 40 geniusz, inna punktacja poza skalą 
$wynik = -5;
if(($wynik < 0) || ($wynik > 40))
{
    echo 'liczba poza skalą';
}
else if($wynik <= 10)
{
    echo 'otrzymujesz ocenę 1';
}
else if($wynik <= 20)
{
    echo 'otrzymujesz ocenę 2';
}
else if($wynik <= 30)
{
    echo 'otrzymujesz ocenę 3';
}
else if($wynik <= 40)
{
    echo 'otrzymujesz ocenę 4';
}
?>