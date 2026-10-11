<?php

// Constants store values that should not change while the script runs.

$firstName = 'Gio';
echo "Variable before reassignment: " . $firstName . "<br />";

// Variables can be reassigned.
$firstName = 'Temi';
echo "Variable after reassignment: " . $firstName . "<br /><br />";

// define() creates a constant while the script is running.
define('STATUS_PAID', 'paid');
echo "Payment status: " . STATUS_PAID . "<br />";

// Constant names are conventionally written in uppercase.
define('TEMPERATURE', 'high');
echo "Temperature: " . TEMPERATURE . "<br />";

// Check whether a constant exists. defined() expects its name as a string.
echo "Direct defined() output: ";
echo defined('STATUS_PAID');
echo "<br />";
echo "Is STATUS_PAID defined? " . (defined('STATUS_PAID') ? 'Yes' : 'No') . "<br />";

// const declares a constant directly in the code.
// Unlike define(), const cannot be placed inside a conditional block.
const SITE_NAME = 'PHP Training';
echo "Site name: " . SITE_NAME . "<br />";

echo "<br /><strong>const and define() differences</strong><br />";
echo "Use const for a constant declared directly in code; its value must be a constant expression.<br />";
echo "Use define() when the constant needs to be created at runtime, such as inside a condition.<br />";
echo "Both create constants that cannot be reassigned.<br />";

// define() can be used conditionally; const cannot be declared in this if block.
if (!defined('OPTIONAL_FEATURE')) {
    define('OPTIONAL_FEATURE', 'enabled');
}
echo "Optional feature: " . OPTIONAL_FEATURE . "<br />";

// Constants cannot be reassigned like variables.
// Uncommenting the next line causes an error:
// define('STATUS_PAID', 'unpaid');

// PHP provides built-in constants, including PHP_VERSION.
echo "PHP version: " . PHP_VERSION . "<br />";

// Magic constants are provided by PHP and vary depending on where they are used.
echo "Current file: " . __FILE__ . "<br />";
echo "This line number: " . __LINE__ . "<br />";

// A side note 
//const declares a constant directly in code. Its value must be a constant expression, and you can’t declare it inside a conditional block.
//define() creates a constant at runtime, so it can be used conditionally.

// magic constants in PHP
// magic constant can actually change depending on how they are used

echo __