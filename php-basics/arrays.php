<h2>Arrays</h2>
<?php 
// Arrays

// We first declare a variable the assign an array to it.
// An array is contained within [](Square brackets)
// It can contain any data type

$roles = ['buyer', 'seller', 'admin'];

// Accessing values inside arrays is done via the INDEX
// An array index starts at 0 and it contains the first element.

echo $roles[0]; //buyer

echo "<br>";

// Count function - counts the elements in the array
echo count($roles) . "<br>"; // 3 - this starts counting from 1 -_-

// Using a loop to iterate through each array item and print it.
// Loop commented as it was replaced with a foreach loop.

// for ($i = 0; $i < count($roles); $i++) {
//     echo $roles[$i] . "<br>";
// }

// Foreach loop - conveniently not covered in the loops section.
// This takes an array and iterates over each item.
// It is more resilient as we don't need any extra logic to handle adding/removing items from the array.
foreach ($roles as $role) {     // For each array as item
    echo $role . "<br>";        // print item and a line break
}


?>

<h2>Associative arrays</h2>

<?php

// These arrays are made of key-value pairs.
$languages = [
    'PHP' => 'PHP: Hypertext Processor',
    'VB' => 'Visual Basic'
];

// This is what a foreach loop will look like if I try to use it like before.
foreach ($languages as $index => $language) {
    echo "$index: $language" . "<br>";
}

// TODO: Cover array functions. Link below.
// https://www.php.net/manual/en/ref.array.php

?>