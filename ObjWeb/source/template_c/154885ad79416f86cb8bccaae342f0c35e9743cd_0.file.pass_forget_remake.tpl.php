<?php
/* Smarty version 3.1.38, created on 2021-02-25 15:16:41
  from 'C:\xampp\htdocs\ObjWeb\template\pass_forget_remake.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6037b149d32f39_90732732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '154885ad79416f86cb8bccaae342f0c35e9743cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\pass_forget_remake.tpl',
      1 => 1614262591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6037b149d32f39_90732732 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/passforget.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">新しいパスワードを入力して下さい。</br>
            記入したら[確認する]をクリックしてください。</td>
        </tr>
        <tr>
            <td>パスワード:</td>
            <td><input name = "pass" type="password" size="10"></td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="pass_forget_submit">
    </form>
    <a href = "http://localhost/ObjWeb/phpSource/login.php"><p>ログイン画面へ戻る</p></a>
</body>
</html><?php }
}
