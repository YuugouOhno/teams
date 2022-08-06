<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comment</title>
    </head>
    <body>
        <h1>コメント投稿ページ</h1>
        <form action ="/store_comment" method="POST">
            @csrf
            <div>
                <h2>コメント</h2>
                <input type="text" name="body" placeholder="本文"/>
            </div>
            <div>
                <input type="hidden" name="portfolio_id" value="{{ $portfolio }}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>
