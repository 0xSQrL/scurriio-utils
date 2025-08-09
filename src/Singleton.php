<?php
namespace Scurriio\Utils;

trait Singleton{
    private static object $instance;

    /**
     * @return static
     */
    public static function instance(): object{
        return static::$instance;
    }

    /**
     * @return static
     */
    public static function instance_safe(): object{
        if(!isset(static::$instance)){
            static::_instantiate();
        }
        return static::$instance;
    }

    public static function _instantiate(){
        $class = static::class;
        static::$instance = new $class;
    }
}
?>