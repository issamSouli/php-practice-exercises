<!-----
eate a variable $score (0–100) and use if/elseif/else to check its value.
Print “A” (90+), “B” (80–89), “C” (70–79), “D” (60–69), or “F” (below 60).

------>
<?php

$score = 101;

if($score >= 90) {
    echo 'you score A in the exam.';
}elseif($score >=80) {
    echo 'you score B in the exam.';
}elseif($score >=70){
    echo 'you score C in the exam.';
}elseif($score >=60){
    echo 'you score D in the exam.';
}else{
    echo 'you score F in the exam.';
}

?>