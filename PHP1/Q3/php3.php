<?php
// Function to calculate the electricity bill
function calculateElectricityBill($units) {
    $totalBill = 0;

    // Calculate the bill based on the given conditions
    if ($units <= 50) {
        $totalBill = $units * 3.50;
    } elseif ($units <= 100) {
        $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $totalBill;
}

// Example usage
$unitsConsumed = 200; // Replace this with the actual units consumed
$billAmount = calculateElectricityBill($unitsConsumed);
echo "Electricity Bill for $unitsConsumed units: Rs. " . number_format($billAmount, 2);
?>
