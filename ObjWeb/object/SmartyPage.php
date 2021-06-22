<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';

class SmartyPage extends SmartyGet{
    public $urlId;
    public $page_name;
    public $smarty_foreach;
    public $id_pages = [];

    public function pageColumn($urlId,$page_name,$smarty_foreach){
        $this->urlId = $urlId;
        $this->page_name = $page_name;
        $this->smarty_foreach = $smarty_foreach;
        $this->id_pages[] = ["id" =>  $this->urlId,
                          "title" => $this->page_name];
    }

    public function getTmp($filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        
        $s->assign($this->smarty_foreach,$this->id_pages);
        $s->display($filename);
    }
}