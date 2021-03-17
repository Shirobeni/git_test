<!DOCTYPE html>
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
    {foreach from=$uparray item=$up}
        ・{$up.updatelog}{$up.update_at}<br />
    {/foreach}
</body>
</html>