<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetSubblog.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SubblogDBManager.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\UserParameter.php';


$s_subblog = new SmartyGetSubblog();

if($_SERVER["REQUEST_METHOD"] == "POST"){
   session_start();
   $name = $_POST['name'];
   $message = $_POST['message'];
   $subblog_id = $_POST['id'];
   $_SESSION['user_name'] = $_POST['user_name'];
   $_SESSION['user_mail'] = $_POST['user_mail'];
   $_SESSION['user_pass'] = $_POST['user_pass'];
   $user_name = $_SESSION['user_name'];
   $user_mail = $_SESSION['user_mail'];
   $user_pass = $_SESSION['user_pass'];
   UserParameter::setUser($user_name,$user_mail,$user_pass);

   if(isset($_POST['edit'])){
      $s_subblog->getTmpEdit([$subblog_id,$name,$message],'C:\xampp\htdocs\ObjWeb\template\edit.tpl');
   }else if(isset($_POST['edit_comp'])){
      $s_subblog->getTmpEditComp([$subblog_id,$name,$message],'C:\xampp\htdocs\ObjWeb\template\edit_comp.tpl');
   }else if(isset($_POST['delete'])){
      $s_subblog->getTmpDeleteConf([$subblog_id,$name,$message],'C:\xampp\htdocs\ObjWeb\template\delete_conf.tpl');
   }else if(isset($_POST['delete_comp'])){
      $s_subblog->getTmpDeleteComp([$subblog_id,$name,$message],'C:\xampp\htdocs\ObjWeb\template\delete_comp.tpl');
   }
    
}