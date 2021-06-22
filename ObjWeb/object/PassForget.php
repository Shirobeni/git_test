<?php

require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGetForget.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\Page.php';
define("DEF_ACT","pass_forget");


class PassForget implements Page{
    public function loadClass(){
        $s = new SmartyGetForget();
        session_cache_limiter("public");
        session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $param = $s->formstr($_POST);
        }
        $act = isset($param["act"]) ? $param["act"]:DEF_ACT;

        if($act == "pass_forget"){
            $s->screen_input();
        }else if($act == "pass_forget_remake"){
            $s->screen_pass_reinput($param);
        }else if($act == "pass_forget_submit"){
            $s->submit($param);
        }

        $temp_name = 'C:\\xampp\\htdocs\\ObjWeb\\template\\'.$act.".tpl";

        $s->getTmp($temp_name);
    }
}