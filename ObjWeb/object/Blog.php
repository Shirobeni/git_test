<?php

require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyPage.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\Page.php';

class Blog implements Page{
    public function loadClass(){

    $smarty_page = new SmartyPage();
    $smarty_page->pageColumn(1,'2021/2/6~','blog_page');
    $smarty_page->getTmp('C:\xampp\htdocs\ObjWeb\template\blog.tpl'); 

        //$s = new SmartyGet();
        //$s->getTmp('C:\xampp\htdocs\ObjWeb\template\blog.tpl');
    }
}