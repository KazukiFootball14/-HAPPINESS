<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HAPPINESS</title>
    </head>
    <body>
        <h1>募集投稿</h1>
        <form action="/recruitments" method="POST">
            @csrf
        
            
            <div class="dog_name">
                <h2>犬の名前</h2>
                <textarea name="recruitment[dog_name]" placeholder="記入お願いします。">{{ old('recruitment.dog_name') }}</textarea>
                <p class="dog_name__error" style="color:red">{{ $errors->first('recruitment.dog_name') }}</p>
            </div>
            
            <div class="kind_id">
                <h2>犬種</h2>
                <select name="recruitment[kind_id]">
                    @foreach($kinds as $kind)
                        <option value="{{ $kind->id }}">{{ $kind->name }}</option>
                    @endforeach
                </select>
            </div>
            
             <div class="dog_gender">
                <h2>イヌ性別</h2>
                <textarea name="recruitment[dog_gender]" placeholder="記入お願いします。">{{ old('recruitment.dog_gender') }}</textarea>
                <p class="dog_gender__error" style="color:red">{{ $errors->first('recruitment.dog_gender') }}</p>
            </div>
            
             <div class="dog_age">
                <h2>イヌ年齢</h2>
                <textarea name="recruitment[dog_age]" placeholder="記入お願いします。">{{ old('recruitment.dog_age') }}</textarea>
                <p class="dog_age__error" style="color:red">{{ $errors->first('recruitment.dog_age') }}</p>
            </div>
            
            <div class="prefecture_id">
                <h2>住んでいる地域</h2>
                <select name="recruitment[prefecture_id]">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                    @endforeach
                </select>
            </div>
            
             <div class="dog_condition">
                <h2>イヌの体調</h2>
                <textarea name="recruitment[dog_condition]" placeholder="記入お願いします。">{{ old('recruitment.dog_condition') }}</textarea>
                <p class="dog_condition__error" style="color:red">{{ $errors->first('recruitment.dog_condition') }}</p>
            </div>
            
             <div class="terms">
                <h2>譲渡条件</h2>
                <textarea name="recruitment[terms]" placeholder="記入お願いします。">{{ old('recruitment.terms') }}</textarea>
                <p class="terms__error" style="color:red">{{ $errors->first('recruitment.terms') }}</p>
            </div>
            
             <div class="fee">
                <h2>譲渡費用</h2>
                <textarea name="recruitment[fee]" placeholder="記入お願いします。">{{ old('recruitment.fee') }}</textarea>
                <p class="fee__error" style="color:red">{{ $errors->first('recruitment.fee') }}</p>
            </div>
            
             <div class="message">
                <h2>メッセージ</h2>
                <textarea name="recruitment[message]" placeholder="記入お願いします。">{{ old('recruitment.message') }}</textarea>
                <p class="message__error" style="color:red">{{ $errors->first('recruitment.message') }}</p>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
        <div class="募集一覧へ">[<a href="/home">募集一覧へ</a>]</div>
    </body>
</html>