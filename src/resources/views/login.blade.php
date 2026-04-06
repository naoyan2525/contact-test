<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
   
</head>
<body>

<div class="header">FashionablyLate</div>

<div class="title">Login</div>

<div class="form-box">
   

    <form action="/login" method="POST">
        @csrf

        <div class="form-item">
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="例：test@example.com" required>
        </div>

        <div class="form-item">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="例：coachtech1106" required>
        </div>

        <button type="submit" class="btn">ログイン</button>
    </form>
</div>

</body>
</html>