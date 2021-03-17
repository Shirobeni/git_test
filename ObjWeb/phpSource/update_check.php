<?php
require_once 'Smarty.class.php';
require_once 'C:\xampp\htdocs\ObjWeb\phpObject\UpdateDBManager.php';

session_start();
$s = new Smarty();
$s->template_dir = 'template';
$s->compile_dir = 'template_c';


$updatemes = $_POST['update_message'];
$upd = date("Y-m-d H:i:s");
//echo $upd;

$update_db_manager = new UpdateDBManager();

$db_insert = $update_db_manager->db_insert([$updatemes,$upd]);



if($db_insert == 'TRUE'){
    $s->assign("message","アップロード完了");
}else{
    $s->assign("message","エラーが発生しました。");
}

/*
try{
    $pdo = new PDO($dsn,$usr,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sel = $pdo->prepare("INSERT INTO update_logger(updatelog,update_at) VALUES('$updatemes','$upd')");
    $sel->execute();
       
    $s->assign("message","アップロード完了");
}catch(PDOException $e){
    echo "接続エラー(アップロードできませんでした):{$e->getMessage()}";
    $s->assign("message","エラーが発生しました。");
}
*/

$s->display('C:\xampp\htdocs\ObjWeb\template\update_check.tpl');