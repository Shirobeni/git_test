<?php
/* Smarty version 3.1.38, created on 2021-02-11 04:40:10
  from 'C:\xampp\htdocs\ObjWeb\template\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6024a71a3735e1_72006382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15be17b697964ffeb4b81ab76dbfbb3dffffcf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\blog.tpl',
      1 => 1613014788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6024a71a3735e1_72006382 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>ブログ</title>
</head>
<body>
    <h1>Blog</h1>
    <p>日常でとくにあったこととか</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_page']->value, 'bl');
$_smarty_tpl->tpl_vars['bl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bl']->value) {
$_smarty_tpl->tpl_vars['bl']->do_else = false;
?>
        <li><a href = "http://localhost/ObjWeb/phpSource/blogpage<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
.php?id=<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['bl']->value['title'];?>
</a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <p><a href = "http://localhost/ObjWeb/phpSource/title.php">戻る</a></p>
</body>
</html><?php }
}
