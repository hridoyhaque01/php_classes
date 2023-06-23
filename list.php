<?php


$array = [[1, 2], [23, 43]];


foreach ($array as list($a, $b)) {
    echo "$a  $b <br>";
}


$marks = [["physics" => 87, "chemistry" => 66, "math" => 56], ["physics" => 87, "chemistry" => 66, "math" => 56], ["physics" => 87, "chemistry" => 66, "math" => 56]];



foreach ($marks as list("physics" => $pysics, "chemistry" => $chemistry, "math" => $math,)) {
    echo "$pysics $chemistry $math <br> ";
}
