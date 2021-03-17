<?php
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\SmartyGetSubblog.php';


$s_subblog = new SmartyGetSubblog();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $s_subblog->formData($name,$message);
}
$s_subblog->getTmp('C:\xampp\htdocs\ObjWeb\template\subblog.tpl');