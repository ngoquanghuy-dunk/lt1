<?php

$income = 15000000;  


$tax = 0;
$net_income = 0;


if ($income <= 10000000) {
    $tax = $income * 0.05;  
} elseif ($income > 10000000 && $income <= 20000000) {
    $tax = $income * 0.10;  
} else {
    $tax = $income * 0.20; 
}


$net_income = $income - $tax;


echo "Thuế phải nộp là: " . number_format($tax, 0, ',', '.') . " VNĐ<br>";
echo "Thu nhập ròng sau khi trừ thuế là: " . number_format($net_income, 0, ',', '.') . " VNĐ";
?>
