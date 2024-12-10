<?php
//zmienna=(warunek)?wartość1:wartość2

$zmienna = 23;
$isTrue = ($zmienna % 2 === 0)? 'parzysta' : 'nieparzysta';
echo $isTrue;
?>