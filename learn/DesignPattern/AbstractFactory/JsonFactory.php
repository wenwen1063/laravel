<?php
/**
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 13:40
 */
namespace DesignPattern\AbstractFactory;

//use PHPUnit\Util\JsonTest;

 class JsonFactory extends AbstractFactory{

     public function createText(string $content): Text
    {
        // TODO: Implement createText() method.
        return new JsonTest($content);
    }

}