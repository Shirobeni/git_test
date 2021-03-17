<!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <h1>DM CLASSIC</h1>
    <p>旧世代向け非公認ローカルルールで遊ぶDUEL MASTERS</p>
    {foreach from=$blog_page item='bl'}
        <li><a href = "http://localhost/ObjWeb/phpSource/dmclassic{$bl.id}.php?id={$bl.id}">{$bl.title}</a></li>
        {if $bl.id eq 1}
            基本的な事項
        {else if $bl.id eq 2}
            ルール・レギュレーションについて(現在編集中)
        {else if $bl.id eq 3}
            初期カードの現状やレートなど(現在編集中)
        {/if}
    {/foreach}
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html>