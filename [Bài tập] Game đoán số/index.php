<?php

function checkNumber($number,$arr)
{
    $first = 0;
    $last = count($arr) - 1;

    while ($last >= $first){
        $mid = (int)(($first + $last)/2);

        if ($arr[$mid] > $number) {
            $last = $mid - 1;
        }elseif ($arr[$mid] < $number) {
            $first = $mid + 1;
        } else {
            return true;
        }

    }
    return false;

}

$arr = [];
for ($i = 0; $i <= 100; $i++) {
array_push($arr,$i);
}

$number = rand(1,150);
echo $number;
echo "<br>";
if (checkNumber($number,$arr)){
    echo "Tro choi ket thuc";
} else {
    echo "Khong co gia tri";
}

