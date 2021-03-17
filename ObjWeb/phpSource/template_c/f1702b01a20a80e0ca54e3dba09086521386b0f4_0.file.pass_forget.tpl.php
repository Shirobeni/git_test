<?php
/* Smarty version 3.1.38, created on 2021-02-25 14:47:59
  from 'C:\xampp\htdocs\ObjWeb\template\pass_forget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6037aa8f4e1626_29758977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1702b01a20a80e0ca54e3dba09086521386b0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\pass_forget.tpl',
      1 => 1614260849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6037aa8f4e1626_29758977 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/passforget.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">名前とメールアドレスを入力して下さい。</br>
            記入したら[確認する]をクリックしてください。</td>
        </tr>
        <tr>
            <td>お名前：</td>
            <td><input name = "name" from type="text" size="50"></td>
            <?php echo $_smarty_tpl->tpl_vars['name_message']->value;?>

        </tr>
        <tr>
            <td>メールアドレス:</td>
            <td><input name = "mail" from type="text" size="50"></td>
            <?php echo $_smarty_tpl->tpl_vars['mail_message']->value;?>

        </td>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="pass_forget_remake">
    </form>
    <a href = "http://localhost/ObjWeb/phpSource/login.php"><p>ログイン画面へ戻る</p></a>
</body>
</html><?php }
}
