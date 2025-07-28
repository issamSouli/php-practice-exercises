<!--
Make a variable $age with any whole number.
Use if/elseif/else to print:
Child (0–12), Teenager (13–17), Adult (18–59), or Senior (60+) based on $age.
-->
<?php

$age = 13;

if($age >= 60) {
    echo "At $age years old, you are a Senior.";
}elseif($age >= 18) {
    echo "At $age years old, you are an Adult.";
}elseif($age >= 13) m{
     echo "At $age years old, you are a Teenager.";
}elseif($age >=0) {
     echo "At $age years old, you are a Child.";
}

?>