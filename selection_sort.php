<?php
/**
 * Created by PhpStorm.
 * User: zhongsiyong
 * Date: 2018/5/28
 * Time: 20:16
 * Version: 1.0
 */
function swap(&$a,&$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function selection_sort(&$arr)
{
    $length = count($arr);
    for ($i = 0;$i<$length-1;$i++){
        $min = $i;
        for ($j = $i+1;$j<$length;$j++){
            if ($arr[$j]<$arr[$min])
                $min = $j;
        }
        swap($arr[$min],$arr[$i]);
    }
}

$arr = array(3,4,2,6,8,1,13,0,5,17,12,10);
selection_sort($arr);

for ($i = 0;$i<count($arr);$i++){
    echo $arr[$i].' ';
}