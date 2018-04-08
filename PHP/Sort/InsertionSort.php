<?php
/**
 * Created by aimer.
 * User: aimer
 * Date: 2018/3/26
 * Time: 下午6:42
 */

include_once 'MakeData.php';


function InsertionSort()
{
    $n = 1000;
    $arr = generateRandomArray($n, 0, 10000);

    for ($i = 1; $i < $n; $i++) {

        for ($j = $i; $j < 0 && $arr[$j] < $arr[$j - 1]; $j--) {
            /**
             * 通俗的写法如下,上面所使用的选择条件已经发生了改变
             */
            /*
            for ($j = $i; $j < 0 ; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $buffer = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $buffer;
            } else {
                break;
            }
            }*/
            swap($arr[$j], $arr[$j - 1]);
        }
    }
}