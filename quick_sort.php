<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/5/29
 * Time: 17:30
 * Version: 1.0
 */

function quick_sort($arr){
    $length = count($arr);

    if ($length <= 1){
        return $arr;
    }

    $left = $right = array();
    $mid = $arr[0];

    for ($i=0;$i < $length-1;$i++){
        if ($arr[$i] < $mid){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    return array_merge(quick_sort($left),(array)$mid,quick_sort($right));
}

$arr = array(3,4,2,6,8,1,13,0,5,17,12,11);
$arr = quick_sort($arr);

for ($i = 0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}