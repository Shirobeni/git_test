<!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <form name="form1" value = "subblog" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">コメントを入力してください。ユーザー名も記入できます。</td>
        </tr>
        <tr>
            <td>名前：</td>
            <td><input name = "name" from type="text" size="50"></td>
        </tr>
        <tr><div align="center">
            <td><input type="button" name="user_mode" value="ユーザー名を名前にする"></td>
        </td>
        <tr>
            <td>コメント:</td>
            <td><input name = "message" type="text" size="256"></td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name = "act" value="subblog_update">
    <input type="hidden" name = "user_name" value="{$user_name}">
    <input type="hidden" name = "user_mail" value="{$user_mail}">
    <input type="hidden" name = "user_pass" value="{$user_pass}">
    </form>
    {foreach from=$blog_log item=$blog}
        <form name="form1" method="POST" action="subblog_edit_or_delete.php" >
        <p>・{$blog.message}---{$blog.name}<br />
        <input type="hidden" name="id" value={$blog.id}>
        <input type="hidden" name="message" value={$blog.message}>
        <input type="hidden" name="name" value={$blog.name}>
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
    
        <input type="submit" name="edit" value="編集する">
        <input type="submit" name="delete" value="削除する">
        </p> 
        </form>
    {/foreach}
    <br /><br />
    <a href = "http://localhost/ObjWeb/phpSource/login.php">ログアウト</a>
    <br />
    <a href = "http://localhost/ObjWeb/phpSource/title.php">ホームへ戻る</a>
</body>
</html>