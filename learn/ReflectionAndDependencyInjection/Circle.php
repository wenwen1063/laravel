<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: Circle.php
 * User: Administrator
 * Date: 2019/1/25
 * Time: 10:03
 */
//namespace  SoundCode\Learn\ReflectionAndDependencyInjection;
//use SoundCode\Learn\ReflectionAndDependencyInjection\Point;


class Circle{

    public $radius;

    public $center;

    const PI=3.14;

    public function __construct(Point $point,$radius=1)
    {
        $this->radius=$radius;
        $this->center=$point;

    }

    public function printCenter()
    {
        printf('圆的的坐标(%d,%d)',$this->center->x,$this->center->y);
    }

    public function area(){
          return 3.14 * pow($this->radius, 2);
    }

}





