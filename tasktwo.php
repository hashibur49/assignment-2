<?php
for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 === 0) {
        // Skip this iteration and continue to the next number
        continue;
    }

    // Print the current number
    echo $i;

    // Add a comma and space unless it's the last number
    if ($i < 50) {
        echo ', ';
    }
}
?>