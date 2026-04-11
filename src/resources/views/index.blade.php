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
    @csrf

    <div class="contact-form">
      <div class="contact-form-group">

        <div class="form-row">
          <label class="form-label">お名前 <span class="required">※</span></label>
          <div class="form-input-area">
            <div class="flex">
              <input type="text" name="last_name" placeholder="※山田" value="{{ old('last_name') }}">
              <input type="text" name="first_name" placeholder="※太郎" value="{{ old('first_name') }}">
            </div>
            <div class="error-flex">
              <div class="error-box">
                @error('last_name')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="error-box">
                @error('first_name')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">性別 <span class="required">※</span></label>
          <div class="form-input-area">
            <div class="gender-group">
              <label><input type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }}> 男性</label>
              <label><input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性</label>
              <label><input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他</label>
            </div>
            @error('gender')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">メールアドレス <span class="required">※</span></label>
          <div class="form-input-area">
            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
            @error('email')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">電話番号 <span class="required">※</span></label>
          <div class="form-input-area">
            <div class="tel-group">
              <input type="text" name="tel1" maxlength="4" placeholder="080" value="{{ old('tel1') }}">
              <span>-</span>
              <input type="text" name="tel2" maxlength="4" placeholder="1234" value="{{ old('tel2') }}">
              <span>-</span>
              <input type="text" name="tel3" maxlength="4" placeholder="5678" value="{{ old('tel3') }}">
            </div>
            @if ($errors->has('tel1') || $errors->has('tel2') || $errors->has('tel3'))
              <p class="error-message">
                {{ $errors->first('tel1') ?? $errors->first('tel2') ?? $errors->first('tel3') }}
              </p>
            @endif
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">住所 <span class="required">※</span></label>
          <div class="form-input-area">
            <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            @error('address')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">建物名</label>
          <div class="form-input-area">
            <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}">
          </div>
        </div>

        <div class="form-row">
          <label class="form-label">お問い合わせの種類 <span class="required">※</span></label>
          <div class="form-input-area">
            <div class="select-wrapper">
              <select name="category_id">
                <option value="">選択してください</option>
                <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>1. 商品のお届けについて</option>
                <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>2. 商品の交換について</option>
                <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>3. 商品トラブル</option>
                <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>4. ショップへのお問い合わせ</option>
                <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>5. その他</option>
              </select>
            </div>
            @error('category_id')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-row form-row-message">
          <label class="form-label">お問い合わせの内容 <span class="required">※</span></label>
          <div class="form-input-area">
            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" rows="5">{{ old('detail') }}</textarea>
            @error('detail')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <button type="submit">確認画面</button>

      </div>
    </div>
  </form>

</body>
</html>