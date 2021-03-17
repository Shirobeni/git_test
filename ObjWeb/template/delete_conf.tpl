<!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog_edit_or_delete.php">
        <tr>
            <td colspan="2">以下の書き込みを削除しますか？</td>
        </tr>
        <tr>
            <td>名前：</td>
            <td>{$name}</td>
            <input type="hidden" name="name" value="{$name}">
        </tr>
        <tr>
            <td>コメント:</td>
            <td>{$message}</td>
            <input type="hidden" name="message" value="{$message}">
            <input type="hidden" name="id" value="{$id}"> 
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="delete_comp" value="削除">
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
</html>