<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
   
</head>
<body>

<div class="form-box">
    <h1>Login</h1>

    <form action="/login" method="POST">
        @csrf

        <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="例：test@example.com" required>
        </div>

        <div class="form-group">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="パスワードを入力" required>
        </div>

        <button type="submit" class="btn">ログイン</button>
    </form>
</div>

</body>
</html>