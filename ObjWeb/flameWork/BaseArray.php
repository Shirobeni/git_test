<?php

class BaseArray{
    const INT = 'int';
    const STRING = 'string';
    const ARRAY = 'array';
    const BOOL = 'bool';

    public $data = [];

    protected static $schema = [];

    public function __construct(){
        
    }

    public function __set($key,$value){
        $schema = static::$schema[$key];
        $geytype_val = gettype($value);

        if($schema == $geytype_val){
            $data[$geytype_val] = $value;
            return;
        }

        switch($schema){
            case INT:
                $data[$geytype_val] = 0;
                return;
            case STRING:
                $data[$geytype_val] = '';
                return;
            case BOOL:
                $data[$geytype_val] = false;
                return;
        }

    }

    public function __get($name){
        if(isset($this->data[$name])){
            return $this->data[$name];
        }else if(isset(static::$schema[$name])){
            return null;
        }
    }
}