<!DOCTYPE html>
<html>
<head>
    <title>新規登録</title>
</head>
<body>
    <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/newmake.php">
    <table border="1" align="center">
        <tr>
            <td>{$state_message}</td>
        </tr>
        <tr>
        <td><div align="center">
        <input type="submit" name="Submit" value="フォームへ戻る">
        </div></td>
        </tr>
    </table>
    <input type="hidden" name="act" value="entry">
    </form>
</body>
</html>