<?php
/* Smarty version 3.1.38, created on 2021-03-22 01:31:03
  from 'C:\xampp\htdocs\ObjWeb\template\delete_conf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6057e54715d137_39449984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daaff4cf344511cf1013ce4dadfe14fec760cbaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\delete_conf.tpl',
      1 => 1616373057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6057e54715d137_39449984 (Smarty_Internal_Template $_smarty_tpl) {
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
        <tr>
            <td colspan="2">以下の書き込みを削除しますか？</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</td>
            <input type="hidden" name="message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="delete_comp" value="削除">
        </div></td>
        </tr>
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
        </form>
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
            <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
            <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
            <input type="hidden" name = "act" value="subblog">
            <tr>
            <td colspan = "2"><div align="center">
                <input type="submit" name ="subblog" value = "キャンセル">
            </div></td>
            </tr>
        </form>
        
    <?php } elseif ($_smarty_tpl->tpl_vars['param_bool']->value == 0) {?>
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
            <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
            <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
            <tr>
                <td colspan = "2">違うユーザーの書き込みは削除できません</td>
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
