<!DOCTYPE html>
<html>
<head>
    <title>新規登録</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/newmake.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">名前とメールアドレスとパスワードを入力して下さい。</br>
            記入したら[確認する]をクリックしてください。</td>
        </tr>
        <tr>
            <td>お名前：</td>
            <td><input name = "name" from type="text" size="50"></td>
            {$name_message}
        </tr>
        <tr>
            <td>メールアドレス:</td>
            <td><input name = "mail" from type="text" size="50"></td>
            {$mail_message}
        </td>
        <tr>
            <td>パスワード:</td>
            <td><input name = "password" type="password" size="10"></td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="confirm">
    </form>
    <a href = "http://localhost/ObjWeb/phpSource/login.php"><p>ログイン画面へ戻る</p></a>
</body>
</html>