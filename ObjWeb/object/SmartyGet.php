<?php
require_once 'Smarty.class.php';

class SmartyGet{

    public function getTmp($filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        //$s->display('C:\xampp\htdocs\ObjWeb\template\title.tpl');
        $s->display($filename);
    }

}