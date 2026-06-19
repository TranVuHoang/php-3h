<?php

/**
 * Condition - Câu lệnh điều kiện
 * #1. if-else
 * #2. switch-case
 */

//-----------------------------------------------
// #1. Câu lệnh điều kiện if-else
//-----------------------------------------------
echo "Câu lệnh điều kiện trong PHP <br>";
$age = 29;

if ($age >= 18) {
  echo "Bạn đã đủ tuổi <br>";
} else {
  echo "Bạn chưa đủ tuổi <br>";
}

$dateTime = date("F");
echo $dateTime;

echo "<br>";
$dateTime = date("F j");
echo $dateTime;

$hours = date("H");
echo "<br>";

if ($hours < 12) {
  echo "Chào buổi sáng";
} elseif ($hours < 18) {
  echo 'Chào buổi chiều';
} else {
  echo "Chào buổi tối";
}

echo "<br>";
$comments = [
  "Good",
  "I like it",
  "How are you?"
];

if (!empty($comments)) {
  echo "Comment yes";
} else {
  echo "Not comment";
}

echo "<br>";
$point = 30;
echo ($point >= 27) ? "Bạn đã thi đạt" : "Bạn đã trượt";

// toán tử 3 ngôi
echo "<br>";
$firstComment = !empty($comments) ? $comments[0] : "No comments";
echo $firstComment;
echo "<br>";

//--------------------------------------------------
// #2. Câu lệnh switch-case
//--------------------------------------------------
$favoriteColor = "Aqua";

switch ($favoriteColor) {
  case "Red":
    echo "You choose RED";
    break;
  case "Green":
    echo "You choose Green";
    break;
  case "Blue":
    echo "You choose Blue";
    break;
  case "Aqua":
    echo "You choose Aqua";
    break;
  default:
    echo "You not choose";
}
