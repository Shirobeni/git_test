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
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
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
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
    </form>
    <td colspan = "2"><div align="center">
    <form name = "form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
        <input type="hidden" name = "user_name" value="{$user_name}">
        <input type="hidden" name = "user_mail" value="{$user_mail}">
        <input type="hidden" name = "user_pass" value="{$user_pass}">
        <input type="hidden" name = "act" value="subblog">
        <input type="submit" name ="subblog" value = "キャンセル">
    </form>
    </div></td>
    {else if $param_bool == 0}
        <form name="form1" method="post" action="http://localhost/ObjWeb/phpSource/subblog.php">
            <input type="hidden" name = "user_name" value="{$user_name}">
            <input type="hidden" name = "user_mail" value="{$user_mail}">
            <input type="hidden" name = "user_pass" value="{$user_pass}">
            <tr>
                <td colspan = "2">違うユーザーの書き込みは編集できません</td>
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