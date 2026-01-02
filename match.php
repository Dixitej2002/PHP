<?php

$day = 0;

$result = match($day){
    1=> "Moday",
    2=> "Tuesday",
    3=> "Wed",
    4=> "Thurs",
    default => "invalid day"
};

echo $result;

//match must return a value which catch by a variable
//match introduce the php 8+ version
// it similar work like switch modern swtich 

?>