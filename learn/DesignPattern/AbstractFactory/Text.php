<?php
/**
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 13:45
 */

namespace DesignPattern\AbstractFactory;

abstract  class Text{

     private $text;

     public function __construct(string $text)
     {
         $this->text=$text;
     }
}