<?php
/**
 * Created by aimer.
 * User: aimer
 * Date: 2018/3/26
 * Time: 下午3:15
 */
/**
 * @desc
 * @param  int $n 数组元素的个数
 * @param  mixed    $rangeL 左区间
 * @param mixed $rangeR 右区间
 * @return array
 */
function generateRandomArray( $n, $rangeL, $rangeR) {
    $arr = array();
    for ($i=0;$i<$n;$i++){
        $arr[$i] = mt_rand($rangeL,$rangeR);

    }
    return $arr;
}

$a = generateRandomArray(1000,1,100000);

function swap($a,$b)
{
    $buffer = $a;
    $a=$b;
    $b=$buffer;
}

