<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/5/28
 * Time: 20:17
 * Version: 1.0
 */

function bubble_sort(&$arr){
    $length = count($arr);
    for ($i=0;$i<$length-1;$i++){
        for ($j=0;$j<$length-1-$i;$j++){
            if ($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
}

$arr = array(3,4,2,6,8,1,13,0,5,17,12,10);
bubble_sort($arr);

for ($i = 0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}