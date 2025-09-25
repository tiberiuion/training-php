<h2>Functions</h2>

<?php 

// Functions are declared with the keyword "function"
// They take a name: hello()
// optional parameters inside ()Parentheses: ( $bar )
// and a body inside {} curly braces: { return.. .}
function hello($bar) {
    return "Hello " .  $bar;
}

// Optional return statement. Some output values, other may return something. Not sure what the difference is yet. Stay tuned.

echo hello('World');

// There are plenty of caveats with functions, I've just gone over some basics for now.
// TODO: Learn more about functions.
// https://www.php.net/manual/en/language.functions.php
?>