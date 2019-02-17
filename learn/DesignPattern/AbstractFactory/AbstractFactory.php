<?php
/**
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 13:05
 */

namespace DesignPattern\AbstractFactory;

abstract class AbstractFactory{

    abstract public function createText(string $content): Text;

}