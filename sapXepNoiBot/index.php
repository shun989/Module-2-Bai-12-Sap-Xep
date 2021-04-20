<?php
function bubbleSort($list)
{
    $count = count($list);
    for ($i = 0; $i < $count; $i++){
        for ($j = 0; $j < $count - 1;$j++){
            if ($list[$j] < $list[$j + 1]){
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
            }
        }
    }
    return $list;
}
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo implode(", ",bubbleSort($list)) ;

echo "<br/>";

function bubble_Sort($listNumber)
{
    $count = count($listNumber);
    for ($i = 0; $i < $count; $i++){
        for ($j = 0; $j < $count - 1;$j++){
            if ($listNumber[$j] > $listNumber[$j + 1]){
                $temp = $listNumber[$j];
                $listNumber[$j] = $listNumber[$j + 1];
                $listNumber[$j + 1] = $temp;
            }
        }
    }
    return $listNumber;
}
$listNumber = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo implode(", ",bubble_Sort($listNumber)) ;