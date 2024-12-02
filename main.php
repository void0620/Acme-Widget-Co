<?php
echo "Purchased Products: ";
$input = trim(fgets(STDIN));
$products = explode(',', $input);
$total_cost = 0;
$is_half = FALSE;

// Calculate total cost of purchased prodcuts.
foreach ($products as $product) {
    if (trim($product) == 'R01') {
        $total_cost += 32.95;
        if ($is_half) {
            $total_cost -=16.48;
        }
        $is_half = !$is_half;
    }
    elseif (trim($product) == 'G01') {
        $total_cost += 24.95;
    }
    elseif (trim($product) == 'B01') {
        $total_cost += 7.95;
    } else {
        echo "Warning: '$product' is not a valid product and will be ignored.\n";
    }
}

// Add delivery cost
if ($total_cost < 50) {
    $total_cost += 4.95;
}
elseif ($total_cost < 90) {
    $total_cost += 2.95;
}
echo "The total cost of purchased products: $$total_cost\n";
?>