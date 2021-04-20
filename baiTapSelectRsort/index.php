<?php
function selectionRsort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] > $list[$max]) {
                $max = $j;
            }
        }
        $list = swapPositions($list, $i, $max);
    }
    return $list;
}

function swapPositions($newList, $left, $right)
{
    $oldValue = $newList[$right];
    $newList[$right] = $newList[$left];
    $newList[$left] = $oldValue;
    return $newList;
}

$list = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo implode(', ', selectionRsort($list));

echo "<br/>";

function selectionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        for ($j = $i; $j < count($list); $j++) {
            if ($list[$j] < $list[$i]) {
                $temp = $list[$j];
                $list[$j] = $list[$i];
                $list[$i] = $temp;
            }
        }
    }
    return $list;
}

$list = range(1, 100);
shuffle($list);
$list = array_slice($list, 0, 10);
echo implode(', ', selectionSort($list));