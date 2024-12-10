<?php
//array_push(tablica, element, element) - dodawanie elementów na koniec tablicy
//array_pop(tablica) - usunięcię ostatniego elementu tablicy
//array_shift(tablica) - usunięcię pierwszego elementu tablicy
//array_unshift(tablica, element, element) - dodanie elementów dna początek tablicy
//shuffle(tablica) - pomieszanie elementów

$owoce = array("jabłko", "gruszka");

array_push($owoce, "banan", "malina");
print_r($owoce);
print("<br>");

array_shift($owoce);
print_r($owoce);
print("<br>");

array_unshift($owoce, "ananas", "cytryna");
print_r($owoce);
print("<br>");

shuffle($owoce);
print_r($owoce);
print("<br>");
?>