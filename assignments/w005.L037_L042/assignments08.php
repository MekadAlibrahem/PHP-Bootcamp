<?php 
/* 
التكليف 08

    لديك Array فيها مجموعة من الأرقام الفردية والزوجية
    المطلوب طباعة الأرقام الزوجية فقط مقسومة على 2

$nums = [1, 13, 12, 20, 51, 17, 30];

*/
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $number) {
    if($number % 2 == 0){
        echo $number / 2  . "<br>";
    }
}
