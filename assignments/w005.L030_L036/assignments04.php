<?php 

/* 
    التكليف 04 تحدي

    لديك مجموعة من الشروط ونريد إختصارها عن طريق ال Ternary Operator
    المطلوب أن تكون في سطر واحد فقط مختصر

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) 

   "A + B = C";

  ($a + $c === $b) 

   "A + C = B";

  ($b + $c === $a) 

   "B + C = A";

  

   "The End";



// Output
"B + C = A"
*/

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" :(($b + $c === $a) ? "B + C = A" : "The End"));


  

   

  

   

  

  





