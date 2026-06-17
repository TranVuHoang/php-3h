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

$hex_colors = [
  "red" => "#F00",
  "black" => "#000",
  "white" => "#FFF",
];
echo "<br>";
echo $hex_colors["red"]; // #F00

$users = [
  "fullname" => "Hoàng Trần",
  "age" => 29,
  "email" => "info@gmail.com",
];

echo "<pre>";
print_r($users);
echo "</pre>";

echo "<hr>";
echo $users["email"];

//------------------------------------------------
// Mảng đa chiều
//------------------------------------------------
$users = [
  [
    "fullname" => "Hoàng Trần",
    "age" => 29,
    "email" => "info@gmail.com",
  ],
  [
    "fullname" => "Trang Trang",
    "age" => 23,
    "email" => "info@gmail2.com",
  ],
  [
    "fullname" => "Trinh Buôn Gà",
    "age" => 29,
    "email" => "info@gmail3.com",
  ],
];
echo "<pre>";
print_r($users);
echo "</pre>";

echo $users[1]["fullname"];