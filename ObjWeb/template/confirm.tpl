<!DOCTYPE html>
<html>
<head>
    <title>新規登録</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/newmake.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">以下の内容で送信します。<br />よろしければ[送信する]を推してください。</td>
        </tr>
        <tr>
            <td>お名前：</td>
            <td>{$prm.name|escape|default:"入力されていません"}</td>
        </tr>
        <tr>
            <td>メールアドレス：</td>
            <td>{$prm.mail|escape|default:"入力されていません"}</td>
        </tr>
        <tr>
            <td>パスワード：</td>
            <td>{$prm.password|escape|default:"入力されていません"}</td>
        </tr>
        <tr>
        <td colspan = "2"><div align="center">
            <input type="button" name="Back" value="戻る" onClick="history.back();" />
            <input type="submit" name="Submit" value="送信する">

        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="submit">
    </form>
</body>
</html>