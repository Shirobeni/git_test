<?php
/* Smarty version 3.1.38, created on 2021-03-22 01:29:56
  from 'C:\xampp\htdocs\ObjWeb\template\subblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6057e504e50530_31281752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce38d9f7e1dbb22699f1460586153b54d969d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\subblog.tpl',
      1 => 1616372848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6057e504e50530_31281752 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <form name="form1" value = "subblog" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">コメントを入力してください。ユーザー名も記入できます。</td>
        </tr>
        <tr>
            <td>名前：</td>
            <td><input name = "name" from type="text" size="50"></td>
        </tr>
        <tr><div align="center">
            <td><input type="button" name="user_mode" value="ユーザー名を名前にする"></td>
        </td>
        <tr>
            <td>コメント:</td>
            <td><input name = "message" type="text" size="256"></td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name = "act" value="subblog_update">
    <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
    <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
    <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
    </form>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_log']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
        <form name="form1" method="POST" action="subblog_edit_or_delete.php" >
        <p>・<?php echo $_smarty_tpl->tpl_vars['blog']->value['message'];?>
---<?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
<br />
        <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
>
        <input type="hidden" name="message" value=<?php echo $_smarty_tpl->tpl_vars['blog']->value['message'];?>
>
        <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
>
        <input type="hidden" name = "user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
">
        <input type="hidden" name = "user_mail" value="<?php echo $_smarty_tpl->tpl_vars['user_mail']->value;?>
">
        <input type="hidden" name = "user_pass" value="<?php echo $_smarty_tpl->tpl_vars['user_pass']->value;?>
">
    
        <input type="submit" name="edit" value="編集する">
        <input type="submit" name="delete" value="削除する">
        </p> 
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/login.php">ログアウト</a>
    <br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html><?php }
}
