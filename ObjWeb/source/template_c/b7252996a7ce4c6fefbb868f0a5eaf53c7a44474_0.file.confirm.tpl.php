<?php
/* Smarty version 3.1.38, created on 2021-02-22 20:46:55
  from 'C:\xampp\htdocs\ObjWeb\template\confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60340a2f16a435_40939262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7252996a7ce4c6fefbb868f0a5eaf53c7a44474' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\confirm.tpl',
      1 => 1614023149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60340a2f16a435_40939262 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/newmake.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">以下の内容で送信します。<br />よろしければ[送信する]を推してください。</td>
        </tr>
        <tr>
            <td>お名前：</td>
            <td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prm']->value['name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "入力されていません" : $tmp);?>
</td>
        </tr>
        <tr>
            <td>メールアドレス：</td>
            <td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prm']->value['mail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "入力されていません" : $tmp);?>
</td>
        </tr>
        <tr>
            <td>パスワード：</td>
            <td><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prm']->value['password'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "入力されていません" : $tmp);?>
</td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="button" name="Back" value="戻る" onClick="history.back();" />
            <input type="submit" name="Submit" value="送信する">

        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="submit">
    </form>
</body>
</html><?php }
}
