<?php

// Data types and type casting

// 4 scalar types
// bool - true or false
$completed = true;

// int - 1, 2, 3
$score = 75;

// float - 1.5, 1.7
$price = 7.69;

// string - "Hello World"
$greeting = "Hello Temi";

// array - a list of values
$skills = ["PHP", "HTML", "CSS", "JavaScript"];

//string - "Dispenser"
$lg = "lg type";

// output on separate lines
echo "Completed: " . ($completed ? "false" : "true") . "<br />";
echo "Score: " . $score . "<br />";
echo "Price: " . $price . "<br />";
echo "Greeting: " . $greeting . "<br />";
echo "Skills: " . implode(", ", $skills) . "<br />";

//another example
echo "lg: " . $lg . "<br />";


// when is the implode used in PHP
// implode() function in PHP is a built in tool used to join the elements
// of an array into a single string

// how to return the type of a variable
echo "Type of greeting: " . gettype($greeting) . "<br />";

// use of var_dump in PHP - prints everything it knows about the expression
var_dump($greeting);
echo "<br />";
var_dump($skills);

echo "<br /><br />";

// Type casting examples
$numberString = "42";
$intValue = (int) $numberString;
$floatValue = (float) $score;
$stringValue = (string) $price;

// display converted values -
echo "Original string: " . $numberString . "<br />";
echo "Cast to int: " . $intValue . "<br />";
echo "Cast to float: " . $floatValue . "<br />";
echo "Cast to string: " . $stringValue . "<br />";

// 4 compound types
// array
// print_r is a way to print an array
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
print_r($companies);
// object
// callable
// iterable

// 5 special types
// resource
// null

