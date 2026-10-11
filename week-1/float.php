<?php

/* FLOAT */

$x = 13.5e5;

echo PHP_FLOAT_MAX;

// floor just rounds everything down 

echo "<br />";

$x = floor((0.1 * 0.7) * 10);

echo $x;
echo "<br />";


// ceil rounds everything up
$x = ceil((0.1 + 0.2) * 10);

echo $x;

//floats are not meant to be compared directly 

$z = 0.25;
$y = 1 - 0.44; 

if (abs($z - $y) < 0.00001) {
    echo "Yes";
} else {
    echo "No";
};

// some constants to take note of 
// NAN, INF

// NAN -- not a number 

echo "<br />";

echo NAN;

echo "<br />";

echo INF; // when the floating max value is exceeded

$overflow = PHP_FLOAT_MAX * 2;
echo $overflow === INF ? "INF" : $overflow;

// the value of PHP_FLOAT_MAX * 2 equals the value of INF

// casting in floats
echo "<br />";

$x = 5;
var_dump((float) $x);
