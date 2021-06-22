<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\SubblogDBManager.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\UserParameter.php';

class SmartyGetSubblog extends SmartyGet{
    protected $name_in;
    protected $message_in;
    protected $param_bool;

    public function formData($name,$message,$user_name,$user_mail,$user_pass){
        if(empty($name)){
            $name = '名無しさん';
        }
        $subblog_db_manager = new SubblogDBManager();
        $db_insert = $subblog_db_manager->db_insert([$name,$message,$user_name,$user_mail,$user_pass]);
        if($db_insert == 'TRUE'){

        }else{
            echo 'アップロードエラー。';
        } 
    }

    public function getTmp($filename){
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';

        list($userName,$userMail,$userPass) = UserParameter::getUser();
        $s->assign('user_name',$userName);
        $s->assign('user_mail',$userMail);
        $s->assign('user_pass',$userPass);
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
        $param_bool = 0;

        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];

        list($userName,$userMail,$userPass) = UserParameter::getUser();
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s->assign("id",$subblog_id);
        $s->assign("name",$name);
        $s->assign("message",$message);
        $s->assign("user_name",$userName);
        $s->assign("user_mail",$userMail);
        $s->assign("user_pass",$userPass);
        $subblog_db_manager = new SubblogDBManager();
        list($db_state_message,$db_get_sel) = $subblog_db_manager->db_select(
            '*',
            "WHERE id = $subblog_id"
        );
        if($db_state_message == 'TRUE'){
            $db_user_name = $db_get_sel[0]['user_name'];
            $db_user_mail = $db_get_sel[0]['user_mail'];
            $db_user_pass = $db_get_sel[0]['user_pass'];
            $db_get_user = [$db_user_name,$db_user_mail,$db_user_pass];
            
            if($db_get_user == [$userName,$userMail,$userPass]){
                $param_bool = 1;
            }
        }
        else{
            $param_bool = 0;
        }
        $s->assign("param_bool",$param_bool);
        $s->display($filename);
    }

    public function getTmpDeleteComp($param,$filename){
        
        list($userName,$userMail,$userPass) = UserParameter::getUser();
        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s->assign("user_name",$userName);
        $s->assign("user_mail",$userMail);
        $s->assign("user_pass",$userPass);
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
        $param_bool = 0;
        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];
        list($userName,$userMail,$userPass) = UserParameter::getUser();
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s_state_message = '';
        $s->assign("id",$subblog_id);
        $s->assign("name",$name);
        $s->assign("message",$message);
        $s->assign("user_name",$userName);
        $s->assign("user_mail",$userMail);
        $s->assign("user_pass",$userPass);
        $subblog_db_manager = new SubblogDBManager();
        list($db_state_message,$db_get_sel) = $subblog_db_manager->db_select(
            '*',
            "WHERE id = $subblog_id"
        );
        if($db_state_message == 'TRUE'){
            $db_user_name = $db_get_sel[0]['user_name'];
            $db_user_mail = $db_get_sel[0]['user_mail'];
            $db_user_pass = $db_get_sel[0]['user_pass'];
            $db_get_user = [$db_user_name,$db_user_mail,$db_user_pass];
            
            if($db_get_user == [$userName,$userMail,$userPass]){
                $param_bool = 1;
            }
        }
        else{
            $param_bool = 0;
        }
        $s->assign("param_bool",$param_bool);
        $s->display($filename);
    }

    public function getTmpEditComp($param,$filename){
        list($userName,$userMail,$userPass) = UserParameter::getUser();
        $subblog_id = $param[0];
        $name = $param[1];
        $message = $param[2];
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s->assign("user_name",$userName);
        $s->assign("user_mail",$userMail);
        $s->assign("user_pass",$userPass);
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