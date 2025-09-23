<?php

// Strings
// They can be declared using single quotes
$price = '$42';

// or double quotes
// If using double quotes, you can use other variables as part of the string and they will get rendered
$text ="The price is $price";

// Concatenation
// Is does using the . (dot);
$text = "The price is" . $price;

// Special characters
// Some special characters need to be escaped. This is done using the \ (backslash) followed by the symbol.
$text = "The price is \"" . $price . "\".";

echo $text;