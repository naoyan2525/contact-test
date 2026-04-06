<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

<div class="header">FashionablyLate</div>

<div class="title">Register</div>

<div class="form-box">

    <form action="/register" method="POST">
        @csrf

        <div class="form-item">
            <label>お名前</label>
            <input type="text" name="name" placeholder="例：山田 太郎" required>
        </div>

        <div class="form-item">
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="例：test@example.com" required>
        </div>

        <div class="form-item">
            <label>パスワード</label>
            <input type="password"  name="password" placeholder="例：coachtech1106" required>
        </div>

        <button type="submit" class="btn">登録</button>
    </form>
</diclass=>

</body>
</html>