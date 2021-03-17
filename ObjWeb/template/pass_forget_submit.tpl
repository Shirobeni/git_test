<!DOCTYPE html>
<html>
<head>
    <title>パスワード変更</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/passforget.php">
    <table border="1" align="center">
        <tr>
            <td>{$state_message}</td>
        </tr>
        <tr>
        <td><div align="center">
        <input type="submit" name="Submit" value="メールフォームへ">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="pass_forget">
    </form>
</body>
</html>