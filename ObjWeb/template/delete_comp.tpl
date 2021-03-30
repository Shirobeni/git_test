<!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
    <tr>
        <td colspan="2">{$state_message}</td>
    </tr>
    <td colspan = "2"><div align="center">
    <form name = "form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
        <input type="hidden" name = "act" value="subblog">
        <input type="submit" name = "subblog" value="サブブログへ戻る">
    </form>
    </div></td>
    </table>
</body>
</html>