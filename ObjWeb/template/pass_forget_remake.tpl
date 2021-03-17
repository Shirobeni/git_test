<!DOCTYPE html>
<html>
<head>
    <title>パスワード変更</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/passforget.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">新しいパスワードを入力して下さい。</br>
            記入したら[確認する]をクリックしてください。</td>
        </tr>
        <tr>
            <td>パスワード:</td>
            <td><input name = "pass" type="password" size="10"></td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="確認する">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="pass_forget_submit">
    </form>
    <a href = "http://localhost/ObjWeb/phpSource/login.php"><p>ログイン画面へ戻る</p></a>
</body>
</html>