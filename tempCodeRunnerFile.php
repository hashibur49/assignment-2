function printEvenNumbersUsingFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i + $step <= $end) {
            echo ', ';
        }
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersUsingFor(2, 20, 2);