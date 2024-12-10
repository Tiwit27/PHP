<?php
//sprawdz czy dana osoba może być prezydentem RP
$wiek = 38;
$can = ($wiek >= 35)?"możesz":"nie możesz";
echo "W tym wieku ".$can." zostać prezydentem";
?>