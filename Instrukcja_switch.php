<?php
// switch( wyrażenie)
// {
//     case X:
//         instrukcja
//         break;
//     case Y:
//         instrukcja
//         break;
//     case Z:
//         instrukcja
//         break;
// }

//zadanie 1
$x = 3;

switch($x)
{
    case 1:
        echo "Dzisiaj jest niedziela";
        break;
    case 2:
        echo "Dzisiaj jest poniedziałek";
        break;
    case 3:
        echo "Dzisiaj jest wtorek";
        break;
    case 4:
        echo "Dzisiaj jest środa";
        break;
    case 5:
        echo "Dzisiaj jest czwartek";
        break;
    case 6:
        echo "Dzisiaj jest piątek";
        break; 
    case 7:
        echo "Dzisiaj jest sobota";
        break;
    default:
        echo "Zła liczba";
        break;
}
?>