<?php

/* Booleans */

$isComplete = false;

echo "A boolean value is either true or false.<br />";
echo "Is \$isComplete a boolean? ";
var_dump(is_bool($isComplete));
echo "<br />";

// In a condition, false-like values are treated as false.
// These include false, 0, 0.0, "", "0", [], and null.
$falseLikeValues = [false, 0, 0.0, "", "0", [], null];
echo "<br />False-like values when converted to boolean:<br />";
foreach ($falseLikeValues as $value) {
    var_dump((bool) $value);
    echo "<br />";
}

// The string "false" is not the boolean false; non-empty strings are true,
// except for the string "0".
$stringFalse = "false";
echo '<br />The string "false" converts to: ';
var_dump((bool) $stringFalse);
echo "<br />";

// Comparisons produce boolean results.
echo "<br />Is 5 greater than 3? ";
var_dump(5 > 3);
echo "<br />";

// Use logical operators to combine or reverse boolean conditions.
$hasPermission = true;
if ($isComplete) {
    echo "The task is complete.<br />";
} else {
    echo "The task is not complete.<br />";
}

if ($hasPermission && !$isComplete) {
    echo "The user has permission and the task is still incomplete.<br />";
}