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

    <!-- 一覧テーブル -->
    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>

        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->category }}</td>
            <td>
                <a href="#" class="detail-btn"
                   onclick="openModal({{ $contact->id }})">
                    詳細
                </a>
            </td>
        </tr>
        @endforeach
    </table>

</div>

<!-- モーダル -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span id="close">×</span>
        <div id="modal-body"></div>
    </div>
</div>

<!-- JS -->
<script>
function openModal(id) {
    fetch(`/admin/${id}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('modal-body').innerHTML = `
                <p>名前：${data.last_name} ${data.first_name}</p>
                <p>性別：${data.gender}</p>
                <p>メール：${data.email}</p>
                <p>電話：${data.tel}</p>
                <p>住所：${data.address}</p>
                <p>建物：${data.building}</p>
                <p>種類：${data.category}</p>
                <p>内容：${data.detail}</p>
            `;

            document.getElementById('modal').style.display = 'block';
        });
}

// 閉じる処理
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('close').onclick = function () {
        document.getElementById('modal').style.display = 'none';
    };
});
</script>

</body>
</html>