<!DOCTYPE html>
<html>
<head>
    <title>ブログ</title>
</head>
<body>
    <h1>Blog</h1>
    <p>日常でとくにあったこととか</p>
    {foreach from=$blog_page item='bl'}
        <li><a href = "http://localhost/ObjWeb/phpSource/blogpage{$bl.id}.php?id={$bl.id}">{$bl.title}</a></li>
    {/foreach}
    <p><a href = "http://localhost/ObjWeb/phpSource/title.php">戻る</a></p>
</body>
</html>