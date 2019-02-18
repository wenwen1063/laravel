<?php
/**
 * 插入排序
 * Created by wenwen<1063440565@qq.com>
 * name: InsertionSort.php
 * User: Administrator
 * Date: 2019/2/18
 * Time: 14:08
 */

    function insertionSort1($arr)
    {
        $len=count($arr);
        for($i=0;$i<$len;$i++){
            $temp=$arr[$i];//必须在外边 ，不然的话会出问题。
            for($j=$i-1;$j>=0;$j--){
                if($temp<$arr[$j]){
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$temp;
                }else{
                    break;
                }
            }
        }
        return $arr;
    }

    function insertionSort2($arr)
    {
        $len=count($arr);
        for($i=1;$i<$len;$i++){
            $preIndex = $i - 1;
            $current = $arr[$i];
            while ($preIndex >= 0 && $arr[$preIndex] > $current) {
                $arr[$preIndex + 1] = $arr[$preIndex];
                $preIndex--;
            }
            $arr[$preIndex + 1] = $current;
        }
        return $arr;
}


$arr=[1,2,5,7,15,7,8,1,77,45,1256,111,6];
var_dump(insertionSort1($arr));