<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>管理画面</title>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

<div class="header">
    FashionablyLate
    <a href="/register" class="register-btn">Register</a>
</div>

  <div class="title">Admin</div>

<div class="admin-form">
  
    <!-- 検索エリア -->
    <div class="search-box">
        <input type="text" placeholder="名前やメールアドレスを入力してください">
        
        <select>
            <option>性別</option>
            <option>男性</option>
            <option>女性</option>
        </select>

        <select>
            <option>お問い合わせの種類</option>
        </select>

        <input type="date">

        <button class="btn">検索</button>
        <button class="btn btn-light">リセット</button>
    </div>

    <!-- テーブル -->
    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>

        <tr>
            <td>山田 太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <td><button class="detail-btn">詳細</button></td>
        </tr>

        <tr>
            <td>佐藤 花子</td>
            <td>女性</td>
            <td>hana@example.com</td>
            <td>返品について</td>
            <td><button class="detail-btn">詳細</button></td>
        </tr>

    </table>
</div>

</body>
</html>