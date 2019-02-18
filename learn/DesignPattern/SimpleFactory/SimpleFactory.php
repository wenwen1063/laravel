<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: SimpleFactory.php
 * User: Administrator
 * Date: 2019/2/18
 * Time: 15:30
 */

namespace DesignPattern\SimpleFactory;

class SimpleFactory {

    public function createBicycle():Bicycle
    {
       return new  Bicycle();
    }
}