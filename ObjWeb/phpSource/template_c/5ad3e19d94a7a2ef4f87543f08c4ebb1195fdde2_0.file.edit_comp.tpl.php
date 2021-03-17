<?php
/* Smarty version 3.1.38, created on 2021-03-16 15:49:52
  from 'C:\xampp\htdocs\ObjWeb\template\edit_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6050c5907cabd9_05478107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad3e19d94a7a2ef4f87543f08c4ebb1195fdde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\edit_comp.tpl',
      1 => 1615905955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6050c5907cabd9_05478107 (Smarty_Internal_Template $_smarty_tpl) {
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
