<?php
/* Smarty version 3.1.38, created on 2021-02-19 15:54:08
  from 'C:\xampp\htdocs\ObjWeb\template\submit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602fd110f1c317_39481590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f61cfceed8ea6ea490e1cb9e7e7c2e2382e6ecc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\submit.tpl',
      1 => 1613746321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602fd110f1c317_39481590 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/newmake.php">
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
    <input type="hidden" name="act" value="entry">
    </form>
</body>
</html><?php }
}
