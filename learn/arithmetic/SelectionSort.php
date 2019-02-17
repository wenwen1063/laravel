<?php
/**
 * 选择排序
 * 在一列数字中，选出最小数与第一个位置的数交换。然后在剩下的数当中再找最小的与第二个位置的数交换，
 * 如此循环到倒数第二个数和最后一个数比较为止。(以下都是升序排列，即从小到大排列)
 * Created by wenwen<1063440565@qq.com>
 * name: SelectionSort.php
 * User: Administrator
 * Date: 2019/2/15
 * Time: 15:08
 */

function selectionSort($arr){
    $len=count($arr);
    for($i=0;$i<$len-1;$i++){
        $min=$i;
        for($j=$i+1;$j<$len;$j++){
            if($arr[$j]<$arr[$min]){
                $min=$j;
            }
        }
        if($min!=$i){
            $tmp=$arr[$i];
            $arr[$i]=$arr[$min];
            $arr[$min]=$tmp;
        }
    }
    return $arr;
}

$arr=[1,2,5,7,15,7,8,1,77,45,1256,111,6];
var_dump(selectionSort($arr));