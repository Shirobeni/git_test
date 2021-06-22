<?php

require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGetNewMake.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\Page.php';
define("DEF_ACT","entry");

class NewMake implements Page{
    public function loadClass(){
        $s = new SmartyGetNewMake();
        session_cache_limiter("public");
        session_start();

        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $param = $s->cnv_formstr($_POST);
        }
        $act = isset($param["act"]) ? $param["act"] : DEF_ACT;
        /*$screen_function_name = '$s->screen_' .$act."()";
        echo $screen_function_name;
        if(!function_exists($screen_function_name)){
            exit();
        }
        call_user_func(array($screen_function_name,$param));
        */
        if($act == "entry"){
            $s->screen_entry();
        }else if($act == "confirm"){
            $s->screen_confirm($param);
        }else if($act == "submit"){
            $s->screen_submit($param);
        }
        $temp_name = 'C:\\xampp\\htdocs\\ObjWeb\\template\\'.$act.".tpl";

        $s->getTmp($temp_name);
    
        //$s->getTmp('C:\xampp\htdocs\ObjWeb\template\newmake.tpl');
    }
}
