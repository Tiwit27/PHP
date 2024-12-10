<?php
/*Podstawowe typy danych można podzielić na:
typy proste: 
-boolean
-integer
-flaot
-string: 
heredoc: w nim łańcuch znakowy rozpoczyna się od <<< po których występuje identyfikator. Nazwy identyfikatora są tworzone jak zmienne. Na końcu łańcucha wstawia się subidentyfikator
nowdoc: składnia nowdoc jest podobna do heredock, polega na tym że ciąg nie jest interpretowany, czyli nazwy zmiennych nie są zmieniane na ich wartości, oraz nazwa identyfikatora jest dawana w apostrof
Typy złożone:
-array
-object
*/
//heredoc
$tekst = "Piotrek zmierzlota";
$str = <<<EOD
Dzik jest dziki, dzik ma ostre kły...$tekst
EOD;
echo $str;
//nowdoc
$str = <<<'EOD'
<br>Dzik jest dziki, dzik ma ostre kły...$tekst
EOD;
echo $str;
?>