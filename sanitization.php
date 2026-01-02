<?php

// $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

// echo htmlspecialchars($name);
// echo $name;

// $age = intval($_GET['age']);
$age = floatval($_GET['age']);

echo $age;
?>
