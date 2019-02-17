<?php
/**
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 13:43
 */

namespace DesignPattern\AbstractFactory;
class  HtmlFactory extends AbstractFactory{
    public  function createText(string $content): Text
    {
        // TODO: Implement createText() method.
        return new HtmlText($content);
    }
}
