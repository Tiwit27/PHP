<?php
//za pomocą instukcji wyboru napisz ile określony miesiąc ma dni
$miesiac = 'Luty';
switch($miesiac)
{
    case 'Styczeń':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Luty':
        echo 'Ten miesiąc ma 28 lub 29 dni';
        break;
    case 'Marzec':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Kwiecień':
        echo 'Ten miesiąc ma 30 dni';
        break;
    case 'Maj':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Czerwiec':
        echo 'Ten miesiąc ma 30 dni';
        break;
    case 'Lipiec':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Sierpień':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Wrzesień':
        echo 'Ten miesiąc ma 30 dni';
        break;
    case 'Październik':
        echo 'Ten miesiąc ma 31 dni';
        break;
    case 'Listopad':
        echo 'Ten miesiąc ma 30 dni';
        break;
    case 'Grudzień':
        echo 'Ten miesiąc ma 31 dni';
        break;
    default:
        echo 'Błędny miesiąc';
        break;
        
}
?>