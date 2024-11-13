<?php
function isPrime($number) {
    // Check if number is less than 2 (not prime)
    if ($number <= 1) {
        return false;
    }

    // Check divisibility from 2 to the number-1
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false; // If divisible, it's not prime
        }
    }

    return true; // If no divisors were found, it's prime
}

// Example usage
$number = 21;
echo isPrime($number) ? "$number is a prime number." : "$number is not a prime number.";

?>