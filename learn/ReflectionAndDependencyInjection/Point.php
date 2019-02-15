<?php
/**
 * 类的反射和依赖注入(https://mjiong.com/blog/docs/19862)
 * Created by wenwen<1063440565@qq.com>
 * name: Point.php
 * User: Administrator
 * Date: 2019/1/25
 * Time: 9:55
 */
//namespace  SoundCode\Learn\ReflectionAndDependencyInjection;

class Point{
    public $x;
    public $y;

    public function __construct($x=0,$y=0)
    {
        $this->x=$x;
        $this->y=$y;

    }

}