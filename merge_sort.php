<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/5/29
 * Time: 18:16
 * Version: 1.0
 */

function merge_sort($arr){
    $length = count($arr);
    if ($length <= 1)
        return $arr;
    $half = ($length>>1) + ($length &1);
    $half_arr = array_chunk($arr,$half);
    $left = merge_sort($half_arr[0]);
    $right = merge_sort($half_arr[1]);
    while (count($left) && count($right)){
        if ($left[0] < $right[0])
            $reg[] = array_shift($left);
        else
            $reg[] = array_shift($right);
    }
    return array_merge($reg,$left,$right);
}

$arr = array(3,4,2,6,8,1,13,0,5,17,12,11);
$arr = merge_sort($arr);

for ($i = 0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}