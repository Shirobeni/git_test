<?php
/* Smarty version 3.1.38, created on 2021-03-04 00:43:07
  from 'C:\xampp\htdocs\ObjWeb\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60401f0b8a0421_84724916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a25204b0b4809e21ad6445263e9b878cd63aa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\login.tpl',
      1 => 1614814290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60401f0b8a0421_84724916 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <form name = "form1" method="post" action="http://localhost/ObjWeb/phpSource/login.php">
    <h1>Login</h1>
    <p>ユーザー名、メールアドレス、パスワードの入力をしてください。</p>
    <tr>
        <td>name</td>
        <td><input name ="name" type="text" size="50"></td>
        <?php echo $_smarty_tpl->tpl_vars['nameMessage']->value;?>

    </tr>
    <br />
    <tr>
        <td>mail</td>
        <td><input name = "mail" type="text" size="50"></td>
        <?php echo $_smarty_tpl->tpl_vars['mailMessage']->value;?>

    </tr>
    <br />
    <tr>
        <td>pass</td>
        <td><input name="pass" type="password" size="20"></td>
        <?php echo $_smarty_tpl->tpl_vars['passMessage']->value;?>

    </tr>
    <br />
    <tr>
        <input type="submit" name="Submit" value="送信する">
    </tr>
    <input type="hidden" name = "act" value="checking">
    <p><a href = "http://localhost/ObjWeb/phpSource/newmake.php">新規の方はこちら</p>
    <p><a href = "http://localhost/ObjWeb/phpSource/passforget.php">パスワードお忘れの方はこちら</p>

    <p><a href = "http://localhost/ObjWeb/phpSource/title.php">トップページへ戻る</p>
</body>
</html><?php }
}
