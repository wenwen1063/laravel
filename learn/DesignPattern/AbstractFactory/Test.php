<?php
/**
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 13:55
 */
namespace  DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\HtmlText;
use DesignPattern\AbstractFactory\JsonText;
use DesignPattern\AbstractFactory\HtmlFactory;
use DesignPattern\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase;

require_once '../../autoload.php';
require_once'../../vendor/autoload.php';

class Test  extends  TestCase{

    public function testCanCreateJsonText()
    {
         $factory=new HtmlFactory();
         $text=$factory->createText('hello');
         $result=$this->assertInstanceOf(HtmlText::class,$text);
         var_dump($result);
    }
}

$c=new Test();
$c->testCanCreateJsonText();