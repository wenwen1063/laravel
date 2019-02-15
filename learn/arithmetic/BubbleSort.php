<?php
/**
 * 冒泡排序
 * Created by wenwen<1063440565@qq.com>
 * name: BubbleSort.php
 * User: Administrator
 * Date: 2019/2/15
 * Time: 15:08
 */

    function bubbleSort($arr){
        $len=count($arr);
        for($i=1;$i<$len;$i++){
            for($j=0;$j<$len-$i;$j++){
                if($arr[$j]>$arr[$j+1]){
                    $tmp=$arr[$j+1];
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$tmp;
                }
            }
        }
        return $arr;
    }

    $arr=[1,2,5,7,15,7,8,1,77,45,1256,111,6];
    var_dump(bubbleSort($arr));