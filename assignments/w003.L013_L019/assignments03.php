<?php 
/* 
    التكليف 03

    لديك ال Code التالي
    كيف نجعل قيمة المتغير b تساوي 100 بدون التعديل على قيم المتغيرات 100 و 200

    $a = 200;
    $b = $a;
    $a = 100;

    echo $b; // 100
*/

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100