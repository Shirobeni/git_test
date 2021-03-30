<?php

class Session{
    protected static $sessionStarted = false;

    public function __construct(){
        if(!self::$sessionStarted){
            session_start();

            self::$sessionStarted = true;
        }
    }

    public function setSession($name,$value){
        $_SESSION[$name] = $value;
    }

    public function getSession($name,$default = null){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
        return $default;
    }

    public function remove($name){
        unset($_SESSION[$name]);
    }

    public function clear(){
        $_SESSION = array();
    }
}