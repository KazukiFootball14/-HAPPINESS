<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HAPPINESS</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1>里親募集</h1>
        <a href='/recruitments/create'>募集する</a>
        <div class='recruitments'>
            @foreach ($recruitments as $recruitment)
                <div class='recruitment'>
                    
                    <h2>犬の名前</h2>
                    <p class='dog_name'>{{ $recruitment->dog_name }}</p>
                    
                    <h2>犬種</2>
                    <p class='kind_id'>{{ $recruitment->kind_id }}</p>
                    <a href="">{{ $recruitment->kind->name }}</a>
                    
                    <h2>犬の性別</h2>
                    <p class='dog_gender'>{{ $recruitment->dog_gender }}</p>
                    
                    <h2>犬の年齢</h2>
                    <p class='dog_age'>{{ $recruitment->dog_age }}</p>
                    
                    <h2>住んでいる地域</h2>
                    <p class='prefecture_id'>{{ $recruitment->prefecture_id }}</p>
                    <a href="">{{ $recruitment->prefecture->name }}</a>
                    
                    <h2>犬の体調</h2>
                    <p class='dog_condittion'>{{ $recruitment->dog_condition }}</p>
                    
                    <h2>譲渡条件</h2>
                    <p class='terms'>{{ $recruitment->terms }}</p>
                    
                    <h2>譲渡費用</h2>
                    <p class='fee'>{{ $recruitment->fee }}</p>
                    
                    <h2>メッセージ</h2>
                    <p class='message'>{{ $recruitment->message }}</p>
                    
                    <div class="edit">
            <a href="/recruitments/{{ $recruitment->id }}/edit">募集投稿編集へ</a>
        </div>
        <div class="footer">
            <a href="/home">募集一覧へ</a>
        </div>
        
        <form action="/recruitments/{{ $recruitment->id }}" id="form_{{ $recruitment->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteRecruitment({{ $recruitment->id }})">投稿内容を消去する</button>
                    </form>
                    
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $recruitments->links() }}
        </div>
        
        <script>
    function deleteRecruitment(id) {
        'use strict'
        
                        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>