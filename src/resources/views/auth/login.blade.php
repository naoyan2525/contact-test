<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="header">
    FashionablyLate
    <a href="/register" class="register-btn">Register</a>
</div>

<div class="title">Login</div>

<div class="form-box">

    <form action="/login" method="POST" novalidate>
        @csrf

        <div class="form-item">
            <label>メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="例：test@example.com">

            {{-- エラー（ここがポイント） --}}
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-item">
            <label>パスワード</label>
            <input type="password" name="password" placeholder="例：coachtech1106">

            {{-- エラー --}}
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn">ログイン</button>
    </form>

</div>

</body>
</html>