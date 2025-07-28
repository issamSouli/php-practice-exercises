<!--
Inside the file, make one variable called $light and set it to one of -- three strings: "red", "yellow", or "green".
--Write an if / elseif / else chain that:
*prints “Stop!” if $light is "red",
*prints “Slow down.” if $light is "yellow",
*otherwise (for "green") prints “Go!”.

Use echo to show a sentence that includes the light color and the instruction, such as: The light is yellow — slow down.
-->

<?php

$light = "white";

if($light != "red" && $light != "green" && $light != "yellow") {
    echo "This Color Doesn't exist";
}
elseif($light == "red") {
    echo "you should stop";
}
elseif($light == "yellow"){
    echo "you should slow down";
}
else{
    echo "You Can Go!";
}

?>