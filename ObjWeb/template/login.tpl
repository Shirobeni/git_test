<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <form name = "form1" method="post" action="http://localhost/ObjWeb/phpSource/login.php">
    <h1>Login</h1>
    <p>ユーザー名、メールアドレス、パスワードの入力をしてください。</p>
    <tr>
        <td>name</td>
        <td><input name ="name" type="text" size="50"></td>
        {$nameMessage}
    </tr>
    <br />
    <tr>
        <td>mail</td>
        <td><input name = "mail" type="text" size="50"></td>
        {$mailMessage}
    </tr>
    <br />
    <tr>
        <td>pass</td>
        <td><input name="pass" type="password" size="20"></td>
        {$passMessage}
    </tr>
    <br />
    <tr>
        <input type="submit" name="Submit" value="送信する">
    </tr>
    <input type="hidden" name = "act" value="checking">
    <p><a href = "http://localhost/ObjWeb/phpSource/newmake.php">新規の方はこちら</p>
    <p><a href = "http://localhost/ObjWeb/phpSource/passforget.php">パスワードお忘れの方はこちら</p>

    <p><a href = "http://localhost/ObjWeb/phpSource/title.php">トップページへ戻る</p>
</body>
</html>