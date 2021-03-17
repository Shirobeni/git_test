<?php
/* Smarty version 3.1.38, created on 2021-03-14 23:54:21
  from 'C:\xampp\htdocs\ObjWeb\template\delete_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604e941d6f4067_27545534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc0cf0f70bfe62d98187f910e399dab09e197bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\delete_comp.tpl',
      1 => 1615761487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604e941d6f4067_27545534 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
    <tr>
        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['state_message']->value;?>
</td>
    </tr>
    <td colspan = "2"><div align="center">
    <input type="button"value="サブブログへ戻る" onClick="location.href='http://localhost/ObjWeb/phpSource/subblog.php'">
    </div></td>
    </table>
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/login.php">ログアウト</a>
    <br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html><?php }
}
