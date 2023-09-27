<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HAPPINESS</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>以下の内容で募集されました</h1>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>犬の名前</h2>
                <p class="dog_name">{{ $recruitment->dog_name }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>犬種</h2>
                <p class="kind_id">{{ $recruitment->kind_id }}
                <a href="">{{ $recruitment->kind->name }}</a>
            </div>
        </div>
        
       <div class="content">
            <div class="content__recruitment">
                <h2>犬の性別</h2>
                <p class="dog_gender">{{ $recruitment->dog_gender }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>犬の年齢</h2>
                <p class="dog_age">{{ $recruitment->dog_age }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>住んでいる地域</h2>
                <p class="prefecture_id">{{ $recruitment->prefecture_id }}</p>
                <a href="">{{ $recruitment->prefecture->name }}</a>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>イヌの体調</h2>
                <p class="dog_condition">{{ $recruitment->dog_condition }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>譲渡条件</h2>
                <p class="terms">{{ $recruitment->terms }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>譲渡費用</h2>
                <p class="fee">{{ $recruitment->fee }}</p>
            </div>
        </div>
        
        <div class="content">
            <div class="content__recruitment">
                <h2>メッセージ</h2>
                <p class="message">{{ $recruitment->message }}</p>
            </div>
        </div>
        
        <div class="edit">
            <a href="/recruitments/{{ $recruitment->id }}/edit">募集投稿編集へ</a>
        </div>
        <div class="footer">
            <a href="/home">募集一覧へ</a>
        </div>
    </body>
</html>