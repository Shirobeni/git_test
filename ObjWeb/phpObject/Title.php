<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetTitle.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\Page.php';


class Title implements Page{
    /*public function newUpdate(){
        $upd = new Update();
        foreach($upd->getData($updatelog,$update_at) as $value){
            
        }

    }*/
    public function loadClass(){
        $s = new SmartyGetTitle();
        $s->getTmp('C:\xampp\htdocs\ObjWeb\template\title.tpl');
    }
}