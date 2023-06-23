<?php

$marks = ["person1" => ["physics" => 87, "chemistry" => 66, "math" => 56], "person2" => ["physics" => 87, "chemistry" => 66, "math" => 56], "person3" => ["physics" => 87, "chemistry" => 66, "math" => 56]];

echo "<table border='1px'>";

foreach ($marks as $key => $firstrow) {
    echo "<tr>";
    echo "<td>$key</td>";
    foreach ($firstrow as $secondrow) {
        echo "<td>$secondrow</td>";
    }
    echo "</tr>";
}


echo "</table>";


echo $marks["person1"]["physics"];
