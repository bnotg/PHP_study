<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/5/29
 * Time: 11:52
 * Version: 1.0
 */

function insertion_sort(&$arr){
    for ($i = 1;$i < count($arr);$i++){
        $temp = $arr[$i];
        for ($j = $i;$j > 0&&$arr[$j-1]>$temp;$j--){
            $arr[$j] = $arr[$j-1];
        }
        $arr[$j] = $temp;
    }
}


$arr = array(3,4,2,6,8,1,13,0,5,17,12,10);
insertion_sort($arr);

for ($i = 0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}