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
            <td colspan="2">書き込みを編集します。</td>
        </tr>
        <tr>
            <td>名前：</td>
            <td>{$name}</td>
            <input type="hidden" name="name" value="{$name}">
        </tr>
        <tr>
            <td>コメント:</td>
            <td><input type="text" name="message" value="{$message}"></td>
        </tr>
        <tr>
        <input type="hidden" name="id" value="{$id}">
        <td colspan = "2"><div align="center">
            <input type="submit" name="edit_comp" value="完了">
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