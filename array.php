<?php

/**
 * Array
 */

$numbers = [1, 3, 4, 6];
echo "<pre>";
print_r($numbers);
echo "</pre>";

$fruits = ["banana", "cherry", "mango", "apple"];
echo "<pre>";
print_r($fruits);
echo "</pre>";
// In ra phần tử đầu tiên của mảng $fruits
echo $fruits[0];

$colors = [
  3 => "red",
  5 => "green",
  7 => "blue",
];
echo "<pre>";
print_r($colors);
echo "</pre>";

// In ra red
echo $colors[3];