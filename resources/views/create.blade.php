<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>ポートフォリオ投稿ページ</h1>
        <form action ="/store" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="title" name="title" placeholder="タイトル"/>
            </div>
            <div>
                <h2>デプロイしたアプリのURL</h2>
                <input name="deploy_url" placeholder="https:example.com"/>
            </div>
            <div>
                <h2>概要</h2>
                <textarea name="overview" placeholder="簡単に概要を書いてください"></textarea>
            </div>
            <div>
                <h2>背景（null可）</h2>
                <textarea name="background" placeholder="アプリを作った背景を入力してください"></textarea>
            </div>
            <div>
                <h2>機能（null可）</h2>
                <textarea name="function" placeholder="アプリに実装した機能を教えてください"></textarea>
            </div>
            <div>
                <h2>プログラミング経験（null可）</h2>
                <textarea name="experience" placeholder="プログラミング経験を教えてください"></textarea>
            </div>
            <div>
                <h2>スライド（null可）</h2>
                <textarea name="slide" placeholder="スライドURLを乗せれば良いのでしょうか？"></textarea>
            </div>
            <div>
                <h2>使い方（null可）</h2>
                <textarea name="usage" placeholder="アプリの使い方を教えてください"></textarea>
            </div>
            <div>
                <h2>youtubeに動画をアップした方はurlを教えてください（null可）</h2>
                <input name="movie_url" placeholder="https:example.com"/>
            </div>
            <div>
                <h2>githubのurl（null可）</h2>
                <input name="github_url" placeholder="https:example.com"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </body>
</html>
