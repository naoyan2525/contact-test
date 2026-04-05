<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  
<div class="header">FashionablyLate</div>

  <div class="title">Contact</div>

  <form action="/confirm" method="POST">

<div class="contact-form">
  
 <div class="contact-form-group">
    <!-- 名前 -->
    <div class="contact-form-name">
      <label>お名前 <span class="required">※</span></label>
      <div class="flex">
        <input type="text" name="last_name" placeholder="※山田" required>
        <input type="text" name="first_name" placeholder="※太郎" required>
      </div>
    </div>

    <!-- 性別 -->
    <div class="contact-form-gender">
      <label>性別 <span class="required">※</span></label>
      <label><input type="radio" name="gender" value="男性" required> 男性</label>
      <label><input type="radio" name="gender" value="女性"> 女性</label>
      <label><input type="radio" name="gender" value="その他"> その他</label>
    </div>

    <!-- メール -->
    <div class="contact-form-email">
      <label>メールアドレス <span class="required">※</span></label>
      <input type="email" name="email" placeholder="test@example.com" required>
    </div>

    <!-- 電話番号 -->
    <div class="contact-form-tel">
      <label>電話番号 <span class="required">※</span></label>
      <div class="flex">
        <input type="text" name="tel1" maxlength="4" placeholder="080" required> -
        <input type="text" name="tel2" maxlength="4" placeholder="1234" required> -
        <input type="text" name="tel3" maxlength="4" placeholder="5678" required>
      </div>
    </div>

    <!-- 住所 -->
    <div class="contact-form-address">
      <label>住所 <span class="required">※</span></label>
      <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" required>
    </div>

    <!-- 建物名 -->
    <div class="contact-form-building">
      <label>建物名 <span class="required">※</span></label>
      <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" required>
    </div>

    <!-- 種類 -->
    <div class="contact-form-category">
      <label>お問い合わせの種類 <span class="required">※</span></label>
      <select name="category" required>
        <option value="">選択してください</option>
        <option value="商品について">商品について</option>
        <option value="注文について">注文について</option>
        <option value="その他">その他</option>
      </select>
    </div>

    <!-- 内容 -->
    <div class="contact-form-message">
      <label>お問い合わせの内容 <span class="required">※</span></label>
      <textarea name="message" placeholder="お問い合わせ内容をご記載ください" rows="5" required></textarea>
    </div>

    <button type="submit">確認画面</button>
 </div>
</div>
  </form>

</body>
</html>