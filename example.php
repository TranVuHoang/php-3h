<?php
// echo "Hello World";
// echo "PI =", 3.14;
// Comment 1 dòng

/**
 * Comment nhiều dòng
 * ...
 */

// print "Hello";
echo "<pre>";
print_r(["PHP", "Ruby", "Dart"]);
echo "</pre>";

var_dump('Hello'); // string(5) "Hello"
echo "<br>";
echo "1" + "2"; // 3

echo "<br>";
echo 1 + "2"; //3

echo "<br>";
echo 5 * 3; // 15

echo "<br>";
echo 10 / 2; // 5

echo "<br>";
echo 10 % 3; // 1

echo "<br>";
const _SERVER_NAME = "localhost";
const _DATABASE_NAME = "test_db";
echo "server:", _SERVER_NAME;
echo "<br>";
echo _DATABASE_NAME;