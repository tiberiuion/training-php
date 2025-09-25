<?php 

// For loops

echo "<h2>For loops</h2>";

for (
  $counter = 0;     // 1. Assigns a variable with $counter = 0, this gets evaluated once unconditionally at the beginning.
  $counter <= 10;   // 2. Designate a condition that gets evaluated before running the loop.
  $counter++        // 3. Gets evaluated at the end of each iteration.
)
{
    echo "$counter<br>"; // Loop body.
}

// While loops

$counter = 10;

echo "<h2>While loops</h2>";

while ($counter > 0){ // Boolean expression.

    echo "$counter<br>";
    $counter--;
}

// Do-While loops

echo "<h2>Do-While loops</h2>";

do {
    echo "$counter<br>";
    $counter++; // The body gets executed at least once reagrdelss if the condition is true or not.
} while ($counter < 10); // Condition that gets evaluated AFTER the loop body gets executed.