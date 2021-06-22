<?php
/* Smarty version 3.1.38, created on 2021-03-28 08:05:19
  from 'C:\xampp\htdocs\ObjWeb\template\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60601c9f6b7609_25264418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305a5e1080ce2d927fec02dc8595a6d0e32d255a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\edit.tpl',
      1 => 1616911481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60601c9f6b7609_25264418 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
    <?php if ($_smarty_tpl->tpl_vars['param_bool']->value == 1) {?>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog_edit_or_delete.php">
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
        <tr>
            <td colspan="2">書き込みを編集します。</td>
        </tr>
        <tr>
            <td>名前：</td>
            <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
            <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        </tr>
        <tr>
            <td>コメント:</td>
            <td><input type="text" name="message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
"></td>
        </tr>
        <tr>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    
        <td colspan = "2"><div align="center">
            <input type="submit" name="edit_comp" value="完了">
        </div></td>
        </tr>
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
    </form>
    <td colspan = "2"><div align="center">
    <form name = "form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
        <input type="hidden" name = "act" value="subblog">
        <input type="submit" name ="subblog" value = "キャンセル">
    </form>
    </div></td>
    <?php } elseif ($_smarty_tpl->tpl_vars['param_bool']->value == 0) {?>
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
            <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
            <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
            <tr>
                <td colspan = "2">違うユーザーの書き込みは編集できません</td>
            </tr>
            <tr>
                <input type="submit" name ="subblog" value = "戻る">
            </tr>
            <input type="hidden" name = "act" value="subblog">
        </form>
    <?php }?>
    </table>
</body>
</html><?php }
}
