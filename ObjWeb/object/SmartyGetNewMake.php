<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\LoginDbManager.php';

class SmartyGetNewMake extends SmartyGet{
    public $getParam = [];
    public $state_condition = '';
    public $name_message = '';
    public $mail_message = '';
    public function getTmp($filename){
        global $s;
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        
        $s->assign("prm",$this->getParam);
        $s->assign("state_message",$this->state_condition);
        $s->assign("name_message",$this->name_message);
        $s->assign("mail_message",$this->mail_message);
        $s->display($filename);

    }

    public function screen_entry(){
        return TRUE;
    }

    public function screen_confirm($param){
        if(!$this->chk_data($param)){
            exit();
        }
        $_SESSION["prm"] = $param;
        $this->getParam = $param;
        return TRUE;
    }

    public function screen_submit($param){
        extract($_SESSION["prm"]);
        
        $log_name = $_SESSION["prm"]['name'];
        $log_mail = $_SESSION["prm"]['mail'];
        $log_pass = $_SESSION["prm"]['password'];


        $login_db_manager = new LoginDbManager();
        $db_insert = $login_db_manager->db_insert([$log_name,$log_mail,$log_pass]);
        
        if($db_insert == 'TRUE'){
            $this->state_condition = '登録が完了しました。';
        }else{
            $this->state_condition = '登録が完了しませんでした。';
        }
       

        return TRUE;
    }
    public function chk_data($array){
        $strerr = "";


        if(empty($array["name"])){
            echo "名前が入力されていません<br />";
            $strerr = "1";
        }
        if(empty($array["password"])){
            echo "パスワードが入力されていません<br />";
            $strerr = "1";
        }
        if(empty($array["mail"])){
            echo "メールアドレスが入力されていません<br />";
            $strerr = "1";
        }
        if((!empty($array["name"])) && (!empty($array["mail"]))){
            $array_log_name = $array["name"];
            $array_log_mail = $array["mail"];
            
            $login_db_manager = new LoginDbManager();
            $db_select = $login_db_manager->db_select("log_name,log_mail","WHERE log_name = '$array_log_name' AND log_mail = '$array_log_mail'");
            
            if($db_select == 'TRUE'){
                echo "ご記入いただいたユーザー名、メールアドレスは既に登録されている可能性があります。";
                $strerr = "1";
            }else if($db_select == 'FALSE'){
            }
        }
        if($strerr == "1"){
            echo "<input type='button' name='Back' value='戻る' onClick='history.back();'>";
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
    public function cnv_formstr($array){
        foreach($array as $k => $v){ 
            $array[$k] = $v;
        }
        return $array;
    }

}