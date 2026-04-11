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
        <a href="/logout" class="register-btn">logout</a>
    </div>

    <div class="title">Admin</div>

    <div class="admin-form">

        <form action="/admin" method="GET" class="search-box">
            <input
                type="text"
                name="keyword"
                placeholder="名前やメールアドレスを入力してください"
                value="{{ request('keyword') }}"
            >

            <div class="select-wrap gender-select">
                <select name="gender">
                    <option value="">性別</option>
                    <option value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
                    <option value="女性" {{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
                    <option value="その他" {{ request('gender') == 'その他' ? 'selected' : '' }}>その他</option>
                </select>
            </div>

            <div class="select-wrap category-select">
                <select name="category">
                    <option value="">お問い合わせの種類</option>
                    <option value="商品のお届けについて" {{ request('category') == '商品のお届けについて' ? 'selected' : '' }}>商品のお届けについて</option>
                    <option value="商品の交換について" {{ request('category') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
                    <option value="商品トラブル" {{ request('category') == '商品トラブル' ? 'selected' : '' }}>商品トラブル</option>
                    <option value="ショップへのお問い合わせ" {{ request('category') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                    <option value="その他" {{ request('category') == 'その他' ? 'selected' : '' }}>その他</option>
                </select>
            </div>

            <div class="date-wrap">
                <input type="date" name="date" value="{{ request('date') }}">
            </div>

            <button type="submit" class="btn">検索</button>
            <a href="/admin" class="btn btn-light">リセット</a>
        </form>

        <div class="export-pagination">
            <button type="button" class="export-btn">エクスポート</button>

            <div class="pagination">
                <a href="#" class="page-btn">&lt;</a>
                <a href="#" class="page-number active">1</a>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <a href="#" class="page-number">4</a>
                <a href="#" class="page-number">5</a>
                <a href="#" class="page-btn">&gt;</a>
            </div>
        </div>

        <table class="contact-table">
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
                        <button type="button" class="detail-btn" onclick="openModal({{ $contact->id }})">
                            詳細
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>

        @if ($contacts->isEmpty())
            <p class="no-data">データがありません。</p>
        @endif

    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="close" class="close-btn">×</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
        function openModal(id) {
            fetch(`/admin/${id}`)
                .then(res => res.json())
                .then(data => {
                    document.getElementById('modal-body').innerHTML = `
                        <div class="modal-row"><strong>お名前</strong><span>${data.last_name} ${data.first_name}</span></div>
                        <div class="modal-row"><strong>性別</strong><span>${data.gender}</span></div>
                        <div class="modal-row"><strong>メールアドレス</strong><span>${data.email}</span></div>
                        <div class="modal-row"><strong>電話番号</strong><span>${data.tel}</span></div>
                        <div class="modal-row"><strong>住所</strong><span>${data.address}</span></div>
                        <div class="modal-row"><strong>建物名</strong><span>${data.building ?? ''}</span></div>
                        <div class="modal-row"><strong>お問い合わせの種類</strong><span>${data.category}</span></div>
                        <div class="modal-row"><strong>お問い合わせ内容</strong><span>${data.detail}</span></div>
                    `;
                    document.getElementById('modal').style.display = 'flex';
                });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('modal');
            modal.style.display = 'none';

            document.getElementById('close').onclick = function () {
                modal.style.display = 'none';
            };

            window.onclick = function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            };
        });
    </script>

</body>
</html>