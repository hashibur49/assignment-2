<?php
// Initialize the first two Fibonacci numbers
$num1 = 0;
$num2 = 1;

// Counter to keep track of the number of Fibonacci numbers printed
$count = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $num1 + $num2;
    
    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop if greater than 100
    }
    
    // Print the current Fibonacci number
    echo $next . " ";
    
    // Update the values of $num1 and $num2 for the next iteration
    $num1 = $num2;
    $num2 = $next;
    
    $count++;
}
?>
