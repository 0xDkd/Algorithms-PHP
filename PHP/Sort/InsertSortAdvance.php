<?php
/**
 * Created by aimer.
 * User: aimer
 * Date: 2018/3/27
 * Time: 上午10:30
 */

include_once 'MakeData.php';
function InsertionSortAdvance()
{
    $n = 10000;
    $arr = generateRandomArray($n, 0, 10000);

    //外层循环用来初始化每一次的header位置
    for ($i = 1; $i < $n; $i++) {
        //记录初始化的header的位置，可以减少内循环重复赋值和比较
        $e = $arr[$i];
        //内层循环用来控制header遍历前边的元素进行比较
        for ($j = $i; $j > 0; $j--) {
            //如果比header初始化的值小的话
            if ($arr[$j-1] > $e) {
                //向后移动一位
                $arr[$j] = $arr[$j-1];
            }else{
                break;
            }
        }
        $arr[$j] = $e;
    }
}