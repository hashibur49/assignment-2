<?php
// // function printEvenNumbersUsingFor($start, $end, $step) {
// //     for ($i = $start; $i <= $end; $i += $step) {
// //         echo $i;
// //         if ($i + $step <= $end) {
// //             echo ', ';
// //         }
// //     }
// // }

// // Call the function to print even numbers from 1 to 20 with a step of 2
// printEvenNumbersUsingFor(2, 20, 2);

// //while loop
// function printEvenNumbersUsingWhile($start, $end, $step) {
//     $i = $start;
//     while ($i <= $end) {
//         echo $i;
//         if ($i + $step <= $end) {
//             echo ', ';
//         }
//         $i += $step;
//     }
// }

// // Call the function to print even numbers from 1 to 20 with a step of 2
// printEvenNumbersUsingWhile(2, 20, 2);


//do-while loop

function printEvenNumbersUsingDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i;
        if ($i + $step <= $end) {
            echo ', ';
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersUsingDoWhile(2, 20, 2);


