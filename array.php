<?php

// $colors = array("red", "yellow", "blue", "green");
// $numbrs = [12, 12, 34, 53];

// // echo $colors[0];
// // echo $numbrs[2];

// echo "<pre>";
// print_r($numbrs);
// echo "</pre>";



// $colors[0] = "red";
// $colors[2] = "yellow";
// $colors[3] = "blue";
// $colors[4] = "green";

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// // associative array 

// $a = array("name" => "hel", "role" => 121);


// echo "<pre>";
// print_r($a);
// echo "</pre>";

// foreach ($a as $key => $x) {
//     echo " $key = $x , <br>";
// }


// var_dump(($a));


$emp = [[1, "emp1", "manager", 5000], [2, "emp1", "manager", 5000], [3, "emp1", "manager", 5000]];


echo "<table border='1px' cellpadding='6px' cellspacing='0'>";

foreach ($emp as $temp) {
    echo "<tr>";
    foreach ($temp as $result) {
        echo "<td> $result </td>";
    }
    echo "</tr>";
}

echo "</table>";

// for ($i = 0; $i < count($emp); $i++) {
//     echo $emp[$i] || "";
// }

echo "<pre>";
print_r($emp);
echo "</pre>";
