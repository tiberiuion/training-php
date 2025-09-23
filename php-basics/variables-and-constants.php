<?php
// Variables
// Declaring a variables is done using the $ (dollar sign).
// Variable HAS TO start with a letter or _ (underscore); it cannot start with a number.
// Variable values CAN change

$skillLevel = 100; // This code creates a variable called $title and assigns it the string "Hello World!"

// Constants
// Declaring a constant is done using the "define" construct
// This takes the name of the constant and the value
// The value in a constant DOES NOT change
// Naming rules from variables apply
// It's not mandatory but it's common practice to use all caps when naming constants

define('LANGUAGE', 'PHP');

// echo LANGUAGE;

// Instead of echo we're using printf (print formatted), something borrowed from C.
// This takes a formatted string which constains placeholders for data types
printf(
    'My %s skill level is %d',
    LANGUAGE,
    $skillLevel
);

