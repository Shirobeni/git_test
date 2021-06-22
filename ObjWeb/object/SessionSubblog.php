<?php
require_once 'C:\xampp\htdocs\ObjWeb\core\Session.php';

class SessionSubblog extends Session{
    public function __construct(){
        if(!static::$sessionStarted){
            session_start();

            static::$sessionStarted = true;
        }
    }

    public function setSession($name,$value){
        parent::setSession($name,$value);
    }

    public function getSession($name,$default = null){
        if(isset($_SESSION[$name])){
            var_dump($_SESSION[$name]);
            return $_SESSION[$name];
            //return array($_SESSION[$name]["name"],$_SESSION[$name]["mail"],$_SESSION["pass"]); 
        }
        return $default;
    }

    public function remove($name){
        parent::remove($move);
    }

    public function clear(){
        parent::clear();
    }
}