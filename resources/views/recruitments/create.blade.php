<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/recruitments" method="RECRUITMENT">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="recruitment[title]" placeholder="タイトル" value="{{ old('recruitment.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="recruitment[body]" placeholder="今日も1日お疲れさまでした。">{{ old('recruitment.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('recruitment.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>