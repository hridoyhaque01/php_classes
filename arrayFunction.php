<?php

// $array = ["orange", "banana", "apple", "watermelon"];

// $array2 = [['a', 'b'], ['c', 'd'], '0'];

// echo count($array);

// echo "<pre>";
// print_r(array_count_values($array));
// echo "</pre>";


// echo in_array('banana', $array, true);
// echo array_search('banana', $array);
// echo "<br>";


// if (in_array('a', $array2)) {
//     echo "true value";
// } else {
//     echo "false value";
// }
// echo array_search('a', $array2);


$array = ["orange", "banana"];
$words = [['a', 'b'], ['c', 'd'], ['0', '1'], '2'];
$numbers = [32, 23];


// $newArray = array_replace($array, $words);
// $newArray2 = array_replace($array, $words, $numbers);
$newArray2 = array_replace_recursive($words, $array);



echo "<pre>";
print_r($newArray2);
echo "</pre>";
