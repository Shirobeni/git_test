<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGetLogin.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\Page.php';
require_once 'C:\xampp\htdocs\ObjWeb\core\Request.php';
define("DEF_ACT","login");

class Login implements Page{
    public function loadClass(){
        $s = new SmartyGetLogin();
        $request = new Request();
        session_cache_limiter("public");
        //session_start();
        
        if($request->isPost() == true){
            $param = $s->data_format($_POST);
        }

        /*if($_SERVER["REQUEST_METHOD"] == "POST"){
            $param = $s->data_format($_POST);
        }*/


        $act = isset($param["act"]) ? $param["act"] : DEF_ACT;
        if($act == "login"){
            $s->screen_login();
        }else if($act == "checking"){
            $s->assign_check($param);
        }
        $s->getTmp('C:\xampp\htdocs\ObjWeb\template\login.tpl');
    }
}