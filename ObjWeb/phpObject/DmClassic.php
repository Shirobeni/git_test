<?php

require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyPage.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\Page.php';

class DmClassic implements Page{
    public function loadClass(){
        $pages =  [
                    ['id' => 1,'name' => 'HOW TO DM CLASSIC'],
                    ['id' => 2,'name' => 'RULE'],
                    ['id' => 3,'name' => 'CLASSICAL CARD']
        ];
        $smarty_page = new SmartyPage();
        foreach($pages as $page){
            $smarty_page->pageColumn($page['id'],$page['name'],'blog_page');
        }
        //$smarty_page->pageColumn(1,'2021/2/6~','blog_page');
        $smarty_page->getTmp('C:\xampp\htdocs\ObjWeb\template\dmclassic.tpl'); 

        //$s = new SmartyGet();
        //$s->getTmp('C:\xampp\htdocs\ObjWeb\template\blog.tpl');
    }
}