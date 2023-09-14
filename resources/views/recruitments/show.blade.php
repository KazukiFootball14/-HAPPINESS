<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recruitments</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/recruitments" method="RECRUITMENT">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="recruitment[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="recruitment[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>

        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>