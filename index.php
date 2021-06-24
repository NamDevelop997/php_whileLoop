<?php
$total = 0;
$index = 0;

// total even number from 0 to 10
while ($index <= 10) {
    $total += $index;
    $index += 2;
}
echo "<h1>Demo while loop</h1>";
echo "total: {$total}";
