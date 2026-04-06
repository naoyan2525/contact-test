<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ確認</title>
  <link rel="stylesheet" href="css/confirm.css">
</head>
<body>

<div class="header">FashionablyLate</div>
<div class="title">Confirm</div>

<div class="confirm-form">


  <div class="row">
      <div class="label">お名前</div>
      <div class="value" id="name"></div>
  </div>

  <div class="row">
    <div class="label">性別</div>
    <div class="value" id="gender"></div>
  </div>

  <div class="row">
    <div class="label">メールアドレス</div>
    <div class="value" id="email"></div>
  </div>

  <div class="row">
    <div class="label">電話番号</div>
    <div class="value" id="tel"></div>
  </div>

  <div class="row">
    <div class="label">住所</div>
    <div class="value" id="address"></div>
  </div>

  <div class="row">
    <div class="label">建物名</div>
    <div class="value" id="building"></div>
  </div>

  <div class="row">
    <div class="label">お問い合わせの種類</div>
    <div class="value" id="category"></div>
  </div>

  <div class="row">
    <div class="label">お問い合わせ内容</div>
    <div class="value" id="detail"></div>
  </div>

  <div class="btn-area">
    <button>送信</button>
    <button onclick="history.back()">修正</button>
  </div>

</div>
</body>
</html>