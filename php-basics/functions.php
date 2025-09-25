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

<h2>Functions with data types</h2>
<?php 
// This is new to me.

// You can declare the data type for parameters and return statements.
// This becomes useful in larger codebases. It helps you see what value types functions take as input and what they output.
function foo(string $bar): string {
    return  $bar;
}
// If you call this using anyting but a string it will throw a type error.
echo foo("Hello function with data types.");
?>

<h2>Global variables</h2>
<?php 
// Follow the steps 1 2 3 GO!

// 1. We define a global variable
    $title = 'Hello world';

    function divTitle() {
        // 3. There are 2 ways to import the global variable inside the local scope
        // global $title;
        $title = $GLOBALS['title']; // Define the title variable locally using the suberglobal variable.

        // 2. We try to access it inside the function but computer says no.
        return "<div>$title</div>";
    }

    // TODO: learn more about globals and superglobals.

echo divTitle();

?>
