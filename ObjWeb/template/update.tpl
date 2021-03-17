<!DOCTYPE html>
<html>
<head>
    <title>開発者用更新日時記入</title>
</head>
<body>
    <form method="post" action="http://localhost/ObjWeb/phpSource/update_check.php">
    <table border="1" align="center" bgcolor="palegreen">
        <tr>
            <td colspan="2">更新内容の入力</td>
        </tr>
        <tr>
            <td>更新内容：</td>
            <td><input name = "update_message" type="text" size="50"></td>
        </tr>
        
        <tr>
        <td colspan = "2"><div align="center">
            <input type="submit" name="Submit" value="入力完了" />
        </div></td>
        </tr>
    </table>
    </form>
</body>
</html>