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
@csrf
 <div class="contact-form-group">
  

    <div class="contact-form-name">
      <label>お名前 <span class="required">※</span></label>
      <div class="flex">
        <input type="text" name="last_name" placeholder="※山田">
        <input type="text" name="first_name" placeholder="※太郎">
      </div>

        @error('last_name')
         <p style="color:red;">{{ $message }}</p>
        @enderror

        @error('first_name')
         <p style="color:red;">{{ $message }}</p>
        @enderror
      </div>

   
    <div class="contact-form-gender">
      <label>性別 <span class="required">※</span></label>
    
      <label><input type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }} > 男性</label>
   
      <label><input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性</label>
    
      <label><input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他</label>
      @error('gender')
         <p style="color:red;">{{ $message }}</p>
      @enderror
    </div>


    <div class="contact-form-email">
      <label>メールアドレス <span class="required">※</span></label>
      <input type="email" name="email" placeholder="test@example.com" >
      @error('email')
         <p style="color:red;">{{ $message }}</p>
      @enderror
    </div>

    <div class="contact-form-tel">
      <label>電話番号 <span class="required">※</span></label>
      <div class="flex">
        <input type="text" name="tel1" maxlength="4" placeholder="080"> -
        <input type="text" name="tel2" maxlength="4" placeholder="1234"> -
        <input type="text" name="tel3" maxlength="4" placeholder="5678">
      </div>
       @if ($errors->has('tel1') || $errors->has('tel2') || $errors->has('tel3'))
        <p style="color:red;">
      {{ $errors->first('tel1') ?? $errors->first('tel2') ?? $errors->first('tel3') }}
        </p>
      @endif
    </div>

  
    <div class="contact-form-address">
      <label>住所 <span class="required">※</span></label>
      <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
      @error('address')
         <p style="color:red;">{{ $message }}</p>
      @enderror 
    </div>

    
    <div class="contact-form-building">
      <label>建物名</label>
      <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101">
    </div>
     

    <div class="contact-form-category">
      <label>お問い合わせの種類 <span class="required">※</span></label>
      <div class="select-wrapper">
      <select name="category">
        <option value="">選択してください</option>
        <option value="商品について">商品について</option>
        <option value="注文について">注文について</option>
        <option value="その他">その他</option>
      </select>
      @error('category')
         <p style="color:red;">{{ $message }}</p>
      @enderror 
      </div>
    </div>

  
    <div class="contact-form-message">
      <label>お問い合わせの内容 <span class="required">※</span></label>
      <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" rows="5"></textarea>
      @error('detail')
         <p style="color:red;">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit">確認画面</button>
 </div>
</div>
  </form>

</body>
</html>