<?php
/* Smarty version 3.1.38, created on 2021-02-02 15:38:06
  from 'C:\xampp\htdocs\ObjWeb\template\newmake.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_601963ce8ac067_73960383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa3bd2d9c85d1e6a2d8aa40ae53a74f2a85a01e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\newmake.tpl',
      1 => 1612276665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601963ce8ac067_73960383 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <h1>NewLogin</h1>
    <p>ユーザー名とパスワードの入力をしてください。</p>

    <tr>
        <td>name</td>
        <td><input name ="name" type="text" size="30"></td>
        <?php echo $_smarty_tpl->tpl_vars['errorname']->value;?>

    </tr>
    <br />
    <tr>
        <td>pass</td>
        <td><input name="password" type="password" size="30"></td>
        <?php echo $_smarty_tpl->tpl_vars['errorpass']->value;?>

    </tr>
    <br />
    <tr>
        <input type="submit" name="Submit" value="確認画面へ">
    </tr>
    
</body>
</html><?php }
}
