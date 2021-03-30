<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetSubblog.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\UserParameter.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\Session.php';

$s_subblog = new SmartyGetSubblog();

$session = new Session();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //session_start();
    $get_session = $session->getSession("prm");

    if(($_POST['act'] == 'checking') || ($_POST['act'] == 'subblog')){
        $user_name = $get_session['name'];
        $user_mail = $get_session['mail'];
        $user_pass = $get_session['pass'];
        UserParameter::setUser($user_name,$user_mail,$user_pass);
    }

    if($_POST['act'] == 'subblog_update'){
        $name = $_POST['name'];
        $message = $_POST['message'];
        $post_user_name = $get_session['name'];
        $post_user_mail = $get_session['mail'];
        $post_user_pass = $get_session['pass'];
        UserParameter::setUser($post_user_name,$post_user_mail,$post_user_pass);
        $s_subblog->formData($name,$message,$post_user_name,$post_user_mail,$post_user_pass);
    }
}
$s_subblog->getTmp('C:\xampp\htdocs\ObjWeb\template\subblog.tpl');