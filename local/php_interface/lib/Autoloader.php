<?php
namespace LocalLib;

use Bitrix\Main\Loader;

Autoloader::register();

Loader::includeModule('iblock');
Loader::includeModule('highloadblock');
Loader::includeModule('catalog');
Loader::includeModule('sale');

class Autoloader{

    public static function register() {
        if (function_exists('__autoload')) {
            spl_autoload_register('__autoload');
        }
        return spl_autoload_register(array('\LocalLib\Autoloader', 'Load'));
    }

    public static function load($className){
        static $ROOT = null;

        if (!is_string($className) || class_exists($className,false)) {
            return false;
        }
        $className = ltrim($className, "\\");
        $arClassName = explode('\\', $className);
        if($arClassName[0] !== 'LocalLib'){
            return false;
        }
        if($ROOT === null){
            $ROOT = dirname(__FILE__);
        }
        $classFilePath = $ROOT;
        foreach ($arClassName as $i => $part) {
            if($i==0){
                continue;
            }
            $classFilePath .= DIRECTORY_SEPARATOR.$part;
        }
        $classFilePath .= '.php';
        if ((file_exists($classFilePath) === false) || (is_readable($classFilePath) === false)) {
            return false;
        }
        require_once($classFilePath);
    }

}