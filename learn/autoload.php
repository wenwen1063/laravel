<?php
/**
 * 自动加载命名空间
 * Created by PhpStorm.
 * User: 10634
 * Date: 2019/2/17
 * Time: 12:51
 */
const ROOTDIR=__DIR__;

if(!defined('ROOTDIR'))
{
    define('ROOTDIR',realpath(__DIR__));   //定义更目录
}
class Autoloader {
    public static function myAutoload( $name )
    {

        $class_path = str_replace('\\',DIRECTORY_SEPARATOR,$name);
        $file = ROOTDIR.'\\'.$class_path.'.php';
        if( file_exists( $file ) )
        {
            require_once( $file );
            if( class_exists($name, false) )
            {
                return true;
            }
        }
        return false;
    }
}
spl_autoload_register('Autoloader::myAutoload');