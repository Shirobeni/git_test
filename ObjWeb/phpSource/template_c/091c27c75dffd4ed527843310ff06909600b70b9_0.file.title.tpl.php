<?php
/* Smarty version 3.1.38, created on 2021-03-09 15:32:31
  from 'C:\xampp\htdocs\ObjWeb\template\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_604786ff842739_08152806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '091c27c75dffd4ed527843310ff06909600b70b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ObjWeb\\template\\title.tpl',
      1 => 1615300346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604786ff842739_08152806 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <h1>Mage Notes</h1>
    <p>多趣味で広くて浅い。。。な人間のホームページ</p>
    <li>私的ゲーム攻略(現在準備中)</li>
    うp主がこれまでクリアしたアケゲーの中から攻略として書けるものを。
    <li><a href = "http://localhost/ObjWeb/phpSource/blog.php">メインブログ</a></li>
    趣味や日常などいろいろ。
    <li><a href = "http://localhost/ObjWeb/phpSource/login.php">サブブログ(ミニブログ)</a></li>
    うp主が技術的な勉強で作ってみたものです。SNSみたいなものー。
    <li><a href = "http://localhost/ObjWeb/phpSource/dmclassic.php">DM CLASSIC</a></li>
    初期、旧枠時代もといDMシリーズメインで遊ぶ、DUEL MASTERSについて。
    <li>OTHER</li>
    その他雑記
    <li><a href = "http://localhost/ObjWeb/phpSource/profile.php">プロフィール</a></li>
    ただのプロフィールです。
    <li>GAME(現在準備中)</li>
    個人製作で作ったゲームまとめ。
    <br /><br />
    <h3>What's New</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uparray']->value, 'up');
$_smarty_tpl->tpl_vars['up']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['up']->value) {
$_smarty_tpl->tpl_vars['up']->do_else = false;
?>
        ・<?php echo $_smarty_tpl->tpl_vars['up']->value['updatelog'];
echo $_smarty_tpl->tpl_vars['up']->value['update_at'];?>
<br />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
