<?php 

/*

التكليف 09

    لديك ال Array التالية
    المطلوب إستخدام ال Array_Slice لإستخراج العناصر الموجودة في المثال في الأسفل
    يجب عليك إستخدام قيم سالبة فقط داخل ال Array_Slice

$nums = [1, 2, 3, 4, 5, 6];

// Output
Array
(
  [0] => 2
  [1] => 3
  [2] => 4
)
*/
$nums = [1, 2, 3, 4, 5, 6];

echo "<pre>";
print_r(array_slice($nums , -5 , -2));
echo "</pre>";