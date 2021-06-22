<?php

require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\Page.php';

class Profile implements Page{
    public function loadClass(){
        $s = new SmartyGet();
        $s->getTmp('C:\xampp\htdocs\ObjWeb\template\profile.tpl');
    }
}
