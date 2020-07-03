<?php

function findMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$nums = [];
for ($i = 0; $i < 100; $i++) {
    $nums[$i] = rand(1,101);
}
foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
echo "<br>";
echo "The mininum value is: " . $minValue;
echo "<br>";
$maxValue = findMax($nums);
echo "<br/>";
echo "The mininum value is: " . $maxValue;

function findMax($arr) {
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max < $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}

