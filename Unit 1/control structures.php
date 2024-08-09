<?php
// PHP Script that calculates the discount on a product based on the following criteria:
// - If the customer is regular customer and purchase amount is more than $500, give a 20% discount
// - If the customer is regular customer and purchase amount is $500 or less, give a 10% discount
// - If the customer is not a regular customer and purchase amount is more than $500, give a 5% discount
// - If the customer is not a regular customer and purchase amount is $500 or less, no discount is given.
// Display final amount after applying the discount.

// function calculateDiscount($isRegularCustomer, $purchaseAmount) {
//     $discountPercentage = 0;

//     if ($isRegularCustomer) {
//         if ($purchaseAmount > 500) {
//             $discountPercentage = 20;
//         } else {
//             $discountPercentage = 10;
//         }
//     } else {
//         if ($purchaseAmount > 500) {
//             $discountPercentage = 5;
//         }
//     }

//     $discountAmount = ($purchaseAmount * $discountPercentage) / 100;

//     $finalAmount = $purchaseAmount - $discountAmount;

//     return $finalAmount;
// }

// $isRegularCustomer = true; 
// $purchaseAmount = 600; 

// $finalAmount = calculateDiscount($isRegularCustomer, $purchaseAmount);

// echo "The final amount after applying the discount is: $" . number_format($finalAmount, 2);




//PHP Script that validates a date given as three integers: day,month, and year. The script should ensure:
//Month between 1 and 12, The day is valid for the given month(considering leap years for february), The year is a +ve number.
//Display whether date is valid or not.

function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

function isValidDate($day, $month, $year) {
    if ($year <= 0) {
        return false;
    }

    if ($month < 1 || $month > 12) {
        return false;
    }

    $daysInMonth = [
        1 => 31,
        2 => isLeapYear($year) ? 29 : 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    ];

    if ($day < 1 || $day > $daysInMonth[$month]) {
        return false;
    }

    return true;
}

$day = 29;
$month = 2;
$year = 2024;

if (isValidDate($day, $month, $year)) {
    echo "The date {$day}/{$month}/{$year} is valid.";
} else {
    echo "The date {$day}/{$month}/{$year} is invalid.";
}

?>