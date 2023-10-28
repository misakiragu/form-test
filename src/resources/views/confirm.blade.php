<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>内容確認</h2>
            </div>
            <form class="form" action="/contacts" method="post">
            @csrf
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['name'] }}</p>
                        <p>{{ $contact['name1'] }}</p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">性別</span>
                    </div>
                    <div class="form__group-content">
                        <p>
                            @if ($contact['gender'] === 'male')
                            男性
                            @elseif ($contact['gender'] === 'female')
                            女性
                            @else
                            不明
                            @endif
                        </p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['email'] }}</p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['post_code'] }}</p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">住所</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['address'] }}</p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['building_name'] }}</p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="confirm-title">
                        <span class="confirm-item">ご意見</span>
                    </div>
                    <div class="form__group-content">
                        <p>{{ $contact['content'] }}</p>
                    </div>
                </div>
                <div class="form-button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <a class="form__back" href="http://localhost/">修正する</a>
            </form>
        </div>
    </main>
</body>

</html>