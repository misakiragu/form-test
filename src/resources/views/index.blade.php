<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content2">
                        <div class="form__input--text1">
                            <input type="text" name="name" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--text1">
                            <input type="text" name="name1" value="{{ old('name1') }}" />
                        </div>
                        <div class="form__error">
                            @error('name1')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__example1">
                    <p class="form__example-text">例）山田</p>
                    <p class="form__example-text">例）太郎</p>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-select">
                        <div class="form__input--select">
                            <input type="radio" name="gender" value="male" id="maleRadio" checked>
                            <label for="maleRadio">男性</label>
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--select">
                            <input type="radio" name="gender" value="female" id="femaleRadio">
                            <label for="femaleRadio">女性</label>
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__example">
                    <p class="form__example-text">test@example.com</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            〒
                            <input type="text" name="post_code" value="{{ old('post_code') }}" />
                        </div>
                        <div class="form__error">
                            @error('post_code')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__example">
                    <p class="form__example-text">例）123-4567</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__example">
                    <p class="form__example-text">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="" name="building_name" placeholder="" value="{{ old('building_name') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__example">
                    <p class="form__example-text">例）千駄ヶ谷マンション101</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" >{{ old('content') }}</textarea>
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>