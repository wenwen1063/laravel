<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: Bicycle.php
 * User: Administrator
 * Date: 2019/2/18
 * Time: 15:34
 */
namespace  DesignPattern\SimpleFactory;

class Bicycle{
    public function driverTo(string $address){
        echo $address;
    }
}