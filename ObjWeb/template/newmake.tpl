<!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
</head>
<body>
    <h1>NewLogin</h1>
    <p>ユーザー名とパスワードの入力をしてください。</p>

    <tr>
        <td>name</td>
        <td><input name ="name" type="text" size="30"></td>
        {$errorname}
    </tr>
    <br />
    <tr>
        <td>pass</td>
        <td><input name="password" type="password" size="30"></td>
        {$errorpass}
    </tr>
    <br />
    <tr>
        <input type="submit" name="Submit" value="確認画面へ">
    </tr>
    
</body>
</html>