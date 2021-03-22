<!DOCTYPE html>
<html>
<head>
    <title>サブブログ</title>
</head>
<body>
    <h1>SUBBLOG</h1>
    <table border="1" align="center" bgcolor="palegreen">
    {if $param_bool == 1}
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
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
        </form>
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="{$user_name}">
            <input type="hidden" name = "user_mail" value="{$user_mail}">
            <input type="hidden" name = "user_pass" value="{$user_pass}">
            <input type="hidden" name = "act" value="subblog">
            <tr>
            <td colspan = "2"><div align="center">
                <input type="submit" name ="subblog" value = "キャンセル">
            </div></td>
            </tr>
        </form>
        
    {else if $param_bool == 0}
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="{$user_name}">
            <input type="hidden" name = "user_mail" value="{$user_mail}">
            <input type="hidden" name = "user_pass" value="{$user_pass}">
            <tr>
                <td colspan = "2">違うユーザーの書き込みは削除できません</td>
            </tr>
            <tr>
                <input type="submit" name ="subblog" value = "戻る">
            </tr>
            <input type="hidden" name = "act" value="subblog">
        </form>
    {/if}
        
    </table>
</body>
</html>