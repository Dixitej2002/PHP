<?php

$x = 10;

function test(){
    // echo $GLOBALS['x'];
    global $x;
    echo $x;
}

test();


// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";

?>