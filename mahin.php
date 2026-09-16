<?php

// Student & order details
$studentName = "Md. Mahin";
$studentID   = "21-45741-3";
$foodChoice  = 1;
$quantity    = 6;

$foodItem = "";
$price    = 0;

switch ($foodChoice) {
    case 1:
        $foodItem = "Coffee";
        $price    = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price    = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price    = 4;
        break;

    case 4:
        $foodItem = "Lassi";
        $price    = 3;
        break;

    default:
        $foodItem = "Unknown";
        $price    = 0;
        break;
}

$subtotal = $price * $quantity;

// Discount rules
if ($subtotal >= 30) {
    $discountPercent = 20;
} elseif ($subtotal >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill      = $subtotal - $discountAmount;

// Receipt
echo "UNIVERSITY CAFETERIA<br>";

echo "Student Name : $studentName<br>";
echo "Student ID   : $studentID<br>";
echo "Food Item    : $foodItem<br>";
echo "Price        : \${$price}<br>";
echo "Quantity     : $quantity<br><br>";

echo "Ordered Items:<br>";
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item $i: $foodItem<br>";
}

echo "Subtotal      : \${$subtotal}<br>";
echo "Discount      : {$discountPercent}%<br>";
echo "Discount Amt  : \${$discountAmount}<br>";
echo "Final Bill    : \${$finalBill}<br>";

echo "Thank you for visiting!<br>";