<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ポートフォリオ詳細ページ</h1>
    <div>
        <div>
            <h2>タイトル</h2>
            <p>{{$portfolio->title}}</p>
        </div>
        <div>
            <h2>デプロイURL</h2>
            <p>{{$portfolio->deploy_url}}</p>
        </div>
        <div>
            <h2>概要</h2>
            <p>{{$portfolio->overview}}</p>
        </div>
        <div>
            <h2>制作背景</h2>
            <p>{{$portfolio->background}}</p>
        </div>
        <div>
            <h2>機能</h2>
            <p>{{$portfolio->function}}</p>
        </div>
        <div>
            <h2>経験</h2>
            <p>{{$portfolio->experience}}</p>
        </div>
        <div>
            <h2>卒業スライド</h2>
            <p>{{$portfolio->slide}}</p>
        </div>
        <div>
            <h2>使い方</h2>
            <p>{{$portfolio->usage}}</p>
        </div>
        <div>
            <h2>Github</h2>
            <p>{{$portfolio->github_url}}</p>
        </div>
        <div>
            <h2>タグ</h2>
            @foreach($portfolio->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        </div>
        <div>
            <iframe width="560" height="315" src={{'https://www.youtube.com/embed/' . $portfolio->movie_url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>
