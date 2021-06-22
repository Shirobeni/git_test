<?php
/* Smarty version 3.1.38, created on 2021-03-28 08:05:42
  from 'C:\xampp\htdocs\ObjWeb\template\edit_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60601cb6aae3d9_29692698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad3e19d94a7a2ef4f87543f08c4ebb1195fdde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\edit_comp.tpl',
      1 => 1616911505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60601cb6aae3d9_29692698 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form name = "form1" value = 'login' method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
        <input type="hidden" name = "act" value="subblog">
        <input type="submit" name = "subblog" value="サブブログへ戻る">
    </form>
    </div></td>
    </table>
</body>
</html><?php }
}
