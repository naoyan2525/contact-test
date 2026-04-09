  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>お問い合わせ確認</title>
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  </head>
  <body>

  <div class="header">FashionablyLate</div>
  <div class="title">Confirm</div>

  <div class="confirm-form">

    <div class="row">
        <div class="label">お名前</div>
        <div class="value" id="name">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</div>
    </div>

    <div class="row">
      <div class="label">性別</div>
      <div class="value" id="gender">{{ $contact['gender'] }}</div>
    </div>

    <div class="row">
      <div class="label">メールアドレス</div>
      <div class="value" id="email">{{ $contact['email'] }}</div>
    </div>

    <div class="row">
      <div class="label">電話番号</div>
      <div class="value" id="tel">{{ $contact['tel1'] }}-{{ $contact['tel2'] }}-{{ $contact['tel3'] }}</div>
    </div>

    <div class="row">
      <div class="label">住所</div>
      <div class="value" id="address">{{ $contact['address'] }}</div>
    </div>

    <div class="row">
      <div class="label">建物名</div>
      <div class="value" id="building">{{ $contact['building'] }}</div>
    </div>

    <div class="row">
      <div class="label">お問い合わせの種類</div>
      <div class="value" id="category">{{ $contact['category'] }}</div>
    </div>

    <div class="row">
      <div class="label">お問い合わせ内容</div>
      <div class="value" id="detail">{{ $contact['detail'] }}</div>
    </div>

    <form action="/store" method="POST">
      @csrf

      <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
      <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
      <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
      <input type="hidden" name="email" value="{{ $contact['email'] }}">
      <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
      <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
      <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
      <input type="hidden" name="address" value="{{ $contact['address'] }}">
      <input type="hidden" name="building" value="{{ $contact['building'] }}">
      <input type="hidden" name="category" value="{{ $contact['category'] }}">
      <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

      <div class="btn-area">
        <button type="submit">送信</button>
        <button type="button" onclick="history.back()">修正</button>
      </div>

    </form>

    </div>
  </div>
  </body>
  </html>