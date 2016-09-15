<?php
class DB
{

    private static $instance;
    public $name = '';
    
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    protected function __construct(){}

}


