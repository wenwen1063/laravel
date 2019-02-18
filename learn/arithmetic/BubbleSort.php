<?php
/**
 * 冒泡排序
 *  比较相邻的元素。如果第一个比第二个大，就交换他们两个。
    对每一对相邻元素做同样的工作，从开始第一对到结尾的最后一对。在这一点，最后的元素应该会是最大的数。
    针对所有的元素重复以上的步骤，除了最后一个。
    持续每次对越来越少的元素重复上面的步骤，直到没有任何一对数字需要比较。
 *
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