<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SubblogDBManager.php';


class SmartyGetSubblog extends SmartyGet{
    protected $name_in;
    protected $message_in;

    public function formData($name,$message){
        if(empty($name)){
            $name = '名無しさん';
        }
        $subblog_db_manager = new SubblogDBManager();
        $db_insert = $subblog_db_manager->db_insert([$name,$message]);
        if($db_insert == 'TRUE'){

        }else{
            echo 'アップロードエラー。';
        } 
    }

    public function getTmp($filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';

        $subblog_db_manager = new SubblogDBManager();
        list($db_state_message,$db_get_sel) = $subblog_db_manager->db_select('*','');
        if($db_state_message == 'TRUE'){
            $s->assign("blog_log",$db_get_sel);
        }else{
            $s->assign("blog_log",['name' => '表示できません','message' => '表示できません']);
             
        }
        $s->display($filename);
    }

    public function getTmpDeleteConf($param,$filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s->assign("id",$param[0]);
        $s->assign("name",$param[1]);
        $s->assign("message",$param[2]);
        $s->display($filename);
    }

    public function getTmpDeleteComp($param,$filename){
        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $subblog_db_manager = new SubblogDBManager();
        $s_state_message = ' ';
        $db_delete = $subblog_db_manager->db_delete("id = '$subblog_id' AND name = '$name' AND message = '$message'");
        if($db_delete == 'TRUE'){
            $s_state_message = "削除しました。";
        }else{
            $s_state_message = "削除に失敗しました。";
            echo '削除エラー';
        }
        $s->assign("state_message",$s_state_message);
        $s->display($filename);
    }

    public function getTmpEdit($param,$filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s_state_message = '';
        $s->assign("id",$param[0]);
        $s->assign("name",$param[1]);
        $s->assign("message",$param[2]);
        $s->display($filename);
    }

    public function getTmpEditComp($param,$filename){
        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $subblog_db_manager = new SubblogDBManager();
        $s_state_message = '';
        $db_update = $subblog_db_manager->db_update([$name,$message],"id = '$subblog_id' AND name = '$name'");
        if($db_update == 'TRUE') {
            $s_state_message = "変更しました。";
        }else{
            $s_state_message = "変更失敗しました。";
            echo '削除エラー';
        }
        $s->assign("state_message",$s_state_message);
        $s->display($filename);
    }
}