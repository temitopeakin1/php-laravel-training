<?php

/* Variables */

// A variable stores a value. In PHP, variable name
// A variable name can be defined and changed
// PHP is executed from top to bottom 

$firstName = "Roy";
$firstName = "keane";
echo $firstName;
echo '<br />';

$name = "Temi";
$age = 25;
$isLearningPhp = true;

echo "<strong>Variable values</strong><br />";
echo "Name: " . $name . "<br />";
echo "Age: " . $age . "<br />";
echo "Learning PHP: " . ($isLearningPhp ? "Yes" : "No") . "<br />";

// Variables can hold different types of values.
echo "<br /><strong>Variable types</strong><br />";
var_dump($name);
echo "<br />";
var_dump($age);
echo "<br />";
var_dump($isLearningPhp);
echo "<br />";

// Variable names are case-sensitive: $name and $Name are different variables.
$Name = "Samuel";
echo "<br />Name: " . $name . "<br />";
echo "Name with a capital N: " . $Name . "<br />";

// Use letters, numbers, and underscores; a variable name cannot start with a number.
$course_name = "PHP";
$lesson2 = "Variables";
echo "<br />Course: " . $course_name . "<br />";
echo "Lesson: " . $lesson2 . "<br />";

// Reassign a value or update it using an arithmetic operator.
$score = 10;
$score = $score + 5;
$score += 2;
echo "<br />Updated score: " . $score . "<br />";

// Join variables and text with the concatenation operator (.)
$greeting = "Hello, " . $name . "!";
echo "<br />" . $greeting . "<br />";

// Double-quoted strings can insert variables directly.
echo "Hello again, {$name}!<br />";

// Check whether a variable has been set before using it.
if (isset($middleName)) {
    echo "Middle name: " . $middleName . "<br />";
} else {
    echo "The middle name has not been set.<br />";
}

// Assigning null means the variable has no value; isset() returns false for null.
$middleName = null;
echo "Is middle name set? ";
var_dump(isset($middleName));
echo "<br />";

// Variable Variables

$foo = 'bar';
$$foo = 'baz';
// three of them will give same output
echo $foo , $bar;
echo '<br />';
echo $foo , $$foo;
echo '<br />';
echo "$foo${$foo}";
