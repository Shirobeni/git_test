<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetSubblog.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\UserParameter.php';


$s_subblog = new SmartyGetSubblog();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['act'] == 'checking'){
        $_SESSION['user_name'] = $_POST['name'];
        $_SESSION['user_mail'] = $_POST['mail'];
        $_SESSION['user_pass'] = $_POST['pass'];
        $user_name = $_SESSION['user_name'];
        $user_mail = $_SESSION['user_mail'];
        $user_pass = $_SESSION['user_pass'];
        UserParameter::setUser($user_name,$user_mail,$user_pass);
    }
    
    if($_POST['act'] == 'subblog'){
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['user_mail'] = $_POST['user_mail'];
        $_SESSION['user_pass'] = $_POST['user_pass'];
        $post_user_name = $_SESSION['user_name'];
        $post_user_mail = $_SESSION['user_mail'];
        $post_user_pass = $_SESSION['user_pass'];
        UserParameter::setUser($post_user_name,$post_user_mail,$post_user_pass);
    }

    if($_POST['act'] == 'subblog_update'){
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['user_mail'] = $_POST['user_mail'];
        $_SESSION['user_pass'] = $_POST['user_pass'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $post_user_name = $_SESSION['user_name'];
        $post_user_mail = $_SESSION['user_mail'];
        $post_user_pass = $_SESSION['user_pass'];
        UserParameter::setUser($post_user_name,$post_user_mail,$post_user_pass);
        $s_subblog->formData($name,$message,$post_user_name,$post_user_mail,$post_user_pass);
    }
}
$s_subblog->getTmp('C:\xampp\htdocs\ObjWeb\template\subblog.tpl');