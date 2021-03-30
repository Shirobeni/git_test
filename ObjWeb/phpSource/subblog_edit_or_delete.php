<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetSubblog.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SubblogDBManager.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\UserParameter.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\Session.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\Request.php';

$s_subblog = new SmartyGetSubblog();
$session = new Session();
$request = new Request();

if($request->isPost() == true){
   //session_start();
   $get_session = $session->getSession("prm");
   $name = $request->getPost('name');
   $message = $request->getPost('message');
   $subblog_id = $request->getPost('id');
   // $name = $_POST['name'];
   // $message = $_POST['message'];
   // $subblog_id = $_POST['id'];
   $user_name = $get_session['name'];
   $user_mail = $get_session['mail'];
   $user_pass = $get_session['pass'];
   
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