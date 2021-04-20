<?php
//tang dan
function insertionRsort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $value = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] > $value) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $value;
    }
    return $list;
}

$list_numbers = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo implode(", ", insertionRsort($list_numbers));

echo "<br/>";
//giam dan.
function insertionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $value = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] < $value) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $value;
    }
    return $list;
}

$list_numbers = range(1,1000);
shuffle($list_numbers);
$newList = array_slice($list_numbers,0,10);
echo implode(", ", insertionSort($newList));