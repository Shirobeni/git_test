<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\LoginDbManager.php';
require_once 'C:\xampp\htdocs\ObjWeb\core\Session.php';

class SmartyGetLogin extends SmartyGet{
    public $name_message = "";
    public $mail_message = "";
    public $pass_message = "";
    public $action_link = '';

    public function getTmp($filename){
        global $s;
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $linking = $this->action_link;
        $s->assign("nameMessage",$this->name_message);
        $s->assign("mailMessage",$this->mail_message);
        $s->assign("passMessage",$this->pass_message);
        $s->display($filename);
    }

    public function screen_login(){
        return TRUE;
    }
    public function assign_check($param){
        $_SESSION["prm"] = $param;
        $session = new Session();

        $session->setSession("prm",$param);
        $getParam = $session->getSession("prm");

        $log_name = $getParam["name"];
        $log_mail = $getParam["mail"];
        $log_pass = $getParam["pass"];

        if((!empty($log_name)) && (!empty($log_pass)) && (!empty($log_mail)))
        {
            $login_db_manager = new LoginDbManager();
            $db_select = $login_db_manager->db_select("*","WHERE log_name = '$log_name' AND log_mail = '$log_mail' AND log_pass = '$log_pass'");
            
            if($db_select == 'TRUE'){
                //http_response_code(301);
                header("Location:http://localhost/ObjWeb/phpSource/subblog.php",true,307);
            }else if($db_select == 'FALSE'){
                $this->pass_message = "パスワードが違います";
            }
            
        }else{
            if(empty($log_name)){
                $this->name_message = "名前が入力されていません";
            }
            if(empty($log_mail)){
                $this->mail_message = "メールアドレスが入力されていません";
            }
            if(empty($log_pass)){
                $this->pass_message = "パスワードが入力されていません";
            }
        }
        return TRUE;
    }

    public function data_format($array){
        foreach($array as $key => $value){
            $array[$key] = $value;
        }
        return $array;
    }

}