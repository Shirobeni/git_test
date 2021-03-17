<?php
/* Smarty version 3.1.38, created on 2021-03-17 00:49:35
  from 'C:\xampp\htdocs\ObjWeb\template\delete_conf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6051440f475469_53860377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daaff4cf344511cf1013ce4dadfe14fec760cbaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\delete_conf.tpl',
      1 => 1615937896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6051440f475469_53860377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
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
    </form>
    <td colspan = "2"><div align="center">
    <input type="button"value="キャンセル" onClick="location.href='http://localhost/ObjWeb/phpSource/subblog.php'">
    </div></td>
    </table>
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/login.php">ログアウト</a>
    <br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html><?php }
}
