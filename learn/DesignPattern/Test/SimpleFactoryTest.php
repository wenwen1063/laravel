<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: SimpleFactoryTest.php
 * User: Administrator
 * Date: 2019/2/18
 * Time: 15:48
 */

namespace DesignPattern\Test;

use DesignPattern\SimpleFactory\SimpleFactory;
use DesignPattern\SimpleFactory\Bicycle;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase{

    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

}

$factory = new SimpleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Paris');
$c=new SimpleFactoryTest();
$c->testCanCreateBicycle();