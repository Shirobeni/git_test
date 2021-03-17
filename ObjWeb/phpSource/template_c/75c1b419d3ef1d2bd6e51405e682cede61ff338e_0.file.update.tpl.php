<?php
/* Smarty version 3.1.38, created on 2021-02-07 23:48:29
  from 'C:\xampp\htdocs\ObjWeb\template\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60206e3deb7cf1_99289387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c1b419d3ef1d2bd6e51405e682cede61ff338e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\update.tpl',
      1 => 1612738102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60206e3deb7cf1_99289387 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>開発者用更新日時記入</title>
</head>
<body>
    <form method="post" action="http://localhost/ObjWeb/phpSource/update_check.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">更新内容の入力</td>
        </tr>
        <tr>
            <td>更新内容：</td>
            <td><input name = "update_message" type="text" size="50"></td>
        </tr>
        
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="入力完了" />
        </div></td>
        </tr>
    </table>
    </form>
</body>
</html><?php }
}
