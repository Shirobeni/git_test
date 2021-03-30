<?php

class BaseArray{
    protected static string $int = 'int';
    protected static string $string = 'string';
    protected static string $array = 'array';
    protected static string $bool = 'bool';

    public $data = [];

    protected static $schema = [];

    public function __set($key,$value){
        $schema = static::$schema;
        $geytype_val = gettype($value);

        if($schema == $geytype_val){
            $data[$geytype_val] = $value;
            return;
        }


    }

    public function __get($name){

    }
}