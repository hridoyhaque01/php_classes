<?php

$array = ["a", "b", "c"];

array_shift($array);

print_r($array);

echo "<br>";
array_unshift($array, "x", "y");
print_r($array);
