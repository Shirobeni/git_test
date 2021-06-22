<?php
/* Smarty version 3.1.38, created on 2021-02-25 15:08:09
  from 'C:\xampp\htdocs\ObjWeb\template\pass_forget_submit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6037af491683f6_39920376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c02a134ae655d5d29ed5d5ac65217a768fb774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\pass_forget_submit.tpl',
      1 => 1614262012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6037af491683f6_39920376 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/passforget.php">
    <table border="1" align="center">
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['state_message']->value;?>
</td>
        </tr>
        <tr>
        <td><div align="center">
        <input type="submit" name="Submit" value="メールフォームへ">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="pass_forget">
    </form>
</body>
</html><?php }
}
