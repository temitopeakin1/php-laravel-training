<?php

/* Strings */

//sample strings 
// Single-quoted strings do not interpolate variables; double-quoted strings do.


$middleName = "Samuel";
$firstName = "Temi";

$name = $firstName . " " . $middleName; // one method
echo $name . '<br />';

// access a specific character in string
echo $name[1] . '<br />';

// access from the back
echo $name[-2];

echo '<br />';

// changing the specific string character
$name[-2] = 'I';

var_dump($name);

// Another way to build a string using interpolation (string interpolation)
$interpolatedName = "{$firstName} Samuel";
echo $interpolatedName;

echo '<br />';

// Heredoc
$text = <<<TEXT
Line 1
Line 2
Line 3
TEXT;

echo nl2br($text);

echo '<br />';

// for Nowdoc, the identifier has to enclosed in single quotes
// Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 3
TEXT;

echo '<br />';
echo nl2br($text);

// Heredoc and Nowdoc are useful for readable multiline strings.
// The string content does not need surrounding quotes.
// Heredoc interpolates variables; Nowdoc does not.

echo '<br /><strong>Other useful string examples</strong><br />';

// Find the number of bytes in a string
$message = "Learn PHP";
echo "Length: " . strlen($message) . '<br />';

// Change a string's letter case
echo "Uppercase: " . strtoupper($message) . '<br />';
echo "Lowercase: " . strtolower($message) . '<br />';

// Remove whitespace from the beginning and end
$input = "  Temi Samuel  ";
echo "Trimmed: " . trim($input) . '<br />';

// Replace part of a string
$sentence = "I am learning JavaScript";
echo str_replace("JavaScript", "PHP", $sentence) . '<br />';

// Get part of a string: start at position 6 and take 3 characters
echo "Part of string: " . substr($message, 6, 3) . '<br />';

// Find text in a string; strpos() returns false when it is not found
$position = strpos($message, "PHP");
if ($position !== false) {
    echo "PHP starts at position: " . $position . '<br />';
} else {
    echo "PHP was not found.<br />";
}

// this is noted 
// strpos



