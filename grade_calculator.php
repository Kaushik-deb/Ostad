<?php
$sub_1 = 35;
$sub_2 = 45;
$sub_3 = 35;
$avg_marks = ($sub_1+$sub_2+$sub_3)/3;
if($avg_marks>=80 && $avg_marks<=100){
    echo "Your grade is A";
}
elseif($avg_marks>=70){
    echo "Your grade is B";
}
elseif($avg_marks>=60){
    echo "Your grade is C";
}
elseif($avg_marks>=50){
    echo "Your grade is D";
}
elseif($avg_marks>=40){
    echo "Your grade is E";
}
else{
    echo "Sorry!! you have failed the exam";
}

?>