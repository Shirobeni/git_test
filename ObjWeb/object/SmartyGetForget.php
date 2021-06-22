<?php
require_once 'C:\xampp\htdocs\ObjWeb\object\SmartyGet.php';
require_once 'C:\xampp\htdocs\ObjWeb\object\LoginDbManager.php';


class SmartyGetForget extends SmartyGet{
    public $getParam = [];
    public $name_message = '';
    public $mail_message = '';
    public $state_message = "";

    public function getTmp($filename){
        global $s;
        $s = new Smarty();
        $s->template_dir = 'template';
        $s->compile_dir = 'template_c';
        $s->assign("name_message",$this->name_message);
        $s->assign("mail_message",$this->mail_message);
        $s->assign("state_message",$this->state_message);
        $s->display($filename);
    }
    public function screen_input(){
        return TRUE;
    }
    public function screen_pass_reinput($param){
        if(!$this->check_data($param)){
            exit();
        }
        $_SESSION["prm"] = $param;
        $this->getParam[] = $param;
        return TRUE;
    }
    public function submit($param){
        if(!$this->check_pass($param)){
            exit();
        }
        $_SESSION["prm"] += $param;

        extract($_SESSION["prm"]);

        $log_name = $_SESSION["prm"]["name"];
        $log_mail = $_SESSION["prm"]["mail"];
        $log_pass = $_SESSION["prm"]["pass"];

        $login_db_manager = new LoginDBManager();
        $db_update = $login_db_manager->db_update("log_pass = '$log_pass'","WHERE log_name = '$log_name' AND log_mail = '$log_mail'");
        if($db_update == true){
            $this->state_message = 'パスワードの変更が完了しました。';
        }else{
            $this->state_message = 'パスワードが変更されませんでした。';
        }
        return TRUE;
    }

    public function check_data($array){
        $strerr = "";

        if(empty($array["name"])){
            echo '名前が入力されていません<br />';
            $strerr = "1";
        }
        if(empty($array["mail"])){
            echo 'メールアドレスが入力されていません<br />';
            $strerr = "1";
        }
        if((!empty($array["name"])) && (!empty($array["mail"]))){
            $array_log_name = $array["name"];
            $array_log_mail = $array["mail"];
            
            $dsn = 'mysql:dbname=mydb;host=127.0.0.1; charset=utf8';
            $usr =  'root';
            $pass = '';
            try{
                $pdo = new PDO($dsn,$usr,$pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sel = $pdo->prepare("SELECT log_name,log_mail FROM subblog_user WHERE log_name = '$array_log_name' AND log_mail = '$array_log_mail'" );
                $sel->execute();
                $sel_rows = $sel->fetchAll(PDO::FETCH_ASSOC);
                if($sel_rows == false){
                    echo "ご記入いただいたユーザー名、メールアドレスは登録されていません。";
                    $strerr = "1";
                }
            }catch(PDOException $e){
                echo "接続エラー:{$e->getMessage()}";
            }
        }
        if($strerr == "1"){
            echo "<input type ='button' name='Back' value='戻る' onClick='history.back();'>";
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    public function check_pass($array){
        $strerr = "";

        if(empty($array["pass"])){
            echo 'パスワードが入力されていません<br />';
            $strerr = "1";
        }
        if($strerr == "1"){
            echo "<input type='button' name='Back' value='戻る' onClick='history.back();'>";
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    public function formstr($array){
        foreach ($array as $key => $value){
            $array[$key] = $value;
        }
        return $array;
    }
}