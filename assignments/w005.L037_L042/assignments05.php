<?php 

/* 
    التكليف 05 تحدي

    ممنوع إستخدام الأرقام نهائيا ويمكنك إستخدام قيم المتغيرات مع ما تعلمته لتنفيذ المطلوب
    المطلوب طباعة الأرقام فقط من أول الرقم إثنين للنهاية
    فكر قليلا بالمنطق كيف ستجعل ال Loop يتجاهل الرقم 1
    يجب إستخدام ال Loop For لعمل المطلوب


// Output
2
3
4

*/
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i = $start ; $i<  count($mix)  ; $i++){
    if($i == 0 ) continue ;
    else{
        if(is_int($mix[$i])){
            echo $mix[$i] . "<br>" ;
        }
    }
}