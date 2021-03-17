<?php
/* Smarty version 3.1.38, created on 2021-03-17 00:45:25
  from 'C:\xampp\htdocs\ObjWeb\template\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_605143158888c6_58583414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305a5e1080ce2d927fec02dc8595a6d0e32d255a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\edit.tpl',
      1 => 1615938319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605143158888c6_58583414 (Smarty_Internal_Template $_smarty_tpl) {
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
