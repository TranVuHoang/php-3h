<?php

/**
 * Vòng lặp trong PHP
 */

// echo "We talk about Iteration(loop)";
// vòng lặp for
for ($i = 5; $i <= 10; $i++) {
  echo "i = $i<br>";
}

echo "<hr>";

// vòng lặp while
$i = 0;

while ($i < 20) {
  echo "i = $i<br>";
  $i++;
}

echo "<hr>";

// vòng lặp do while
$i = 0;

do {
  echo "x = $i<br>";
  $i++;
} while ($i < 10);

echo "<hr>";
// vòng lặp foreach
$fruits = ["apple", 'pineapple', 'orange', 'lemon'];

foreach ($fruits as $index => $fruit) {
  echo ($index + 1) . ". $fruit <br>";
}

echo "<hr>";

$person = [
  'fullname' => "Tran Vu Hoang",
  'email' => 'tranvuhoang@gmail.com',
  'age' => 29
];

foreach ($person as $key => $value) {
  echo "$key : $value <br>";
}
