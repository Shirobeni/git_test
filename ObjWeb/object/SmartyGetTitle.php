<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\UpdateDBManager.php';

class SmartyGetTitle extends SmartyGet{
    protected $updatelog;
    protected $update_at;


    public function getTmp($filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        
        $dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
        $usr =  'root';
        $pass = '';

        $update_db_manager = new UpdateDBManager();
        $update_db_manager->db_select('*','ORDER BY update_at DESC LIMIT 5');
        $s_state_message = $update_db_manager->state_message;
        /*foreach($update_db_manager->getSel as $k => $gs){
            echo $k." : ".$gs;
        }*/
        if ($s_state_message == 'TRUE'){
            $s->assign("uparray",$update_db_manager->getSel);
        }else{
            $s->assign("uparray",['updatelog' => '現在表示できません','update_at','']);
        }
        /*
        try{
            $pdo = new PDO($dsn,$usr,$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sel = $pdo->prepare('SELECT * FROM update_logger');
            $sel->execute();
            $sel->setFetchMode(PDO::FETCH_ASSOC);
            $s->assign("uparray",$sel);
        }catch(PDOException $e){
            echo "接続エラー:{$e->getMessage()}";
        }*/
        $s->display($filename);
    }
}