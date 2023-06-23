<?php

$x = 10;

$hello = function ($a) {

    echo $a;
    global $x;
    echo $x;
};

echo $hello(6);
