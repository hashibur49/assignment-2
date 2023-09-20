<?php
function printFibonacci($n) {
    // Initialize the first two Fibonacci numbers
    $num1 = 0;
    $num2 = 1;

    echo "First $n Fibonacci numbers:\n";

    for ($i = 0; $i < $n; $i++) {
        // Print the current Fibonacci number
        echo $num1 . " ";

        // Calculate the next Fibonacci number
        $next = $num1 + $num2 ;

        // Update the values of $num1 and $num2  for the next iteration
        $num1 = $num2;
        $num2  = $next;
    }
}

// Call the function to print the num1 15 Fibonacci numbers
printFibonacci(15);
?>
