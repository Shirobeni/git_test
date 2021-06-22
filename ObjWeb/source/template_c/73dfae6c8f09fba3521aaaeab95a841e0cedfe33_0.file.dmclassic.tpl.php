<?php
/* Smarty version 3.1.38, created on 2021-02-11 12:58:30
  from 'C:\xampp\htdocs\ObjWeb\template\dmclassic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60251be608c7f3_36272450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73dfae6c8f09fba3521aaaeab95a841e0cedfe33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\dmclassic.tpl',
      1 => 1613044652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60251be608c7f3_36272450 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <h1>DM CLASSIC</h1>
    <p>旧世代向け非公認ローカルルールで遊ぶDUEL MASTERS</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_page']->value, 'bl');
$_smarty_tpl->tpl_vars['bl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bl']->value) {
$_smarty_tpl->tpl_vars['bl']->do_else = false;
?>
        <li><a href = "http://localhost/ObjWeb/phpSource/dmclassic<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
.php?id=<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['bl']->value['title'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['bl']->value['id'] == 1) {?>
            基本的な事項
        <?php } elseif ($_smarty_tpl->tpl_vars['bl']->value['id'] == 2) {?>
            ルール・レギュレーションについて(現在編集中)
        <?php } elseif ($_smarty_tpl->tpl_vars['bl']->value['id'] == 3) {?>
            初期カードの現状やレートなど(現在編集中)
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html><?php }
}
