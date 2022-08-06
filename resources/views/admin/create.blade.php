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
        <form action ="/admin/store" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="title" name="title" value="{{ $draft->title }}"/>
            </div>
            <div>
                <h2>デプロイしたアプリのURL</h2>
                <input name="deploy_url" value="{{ $draft->deploy_url }}"/>
            </div>
            <div>
                <h2>概要</h2>
                <textarea name="overview">{{ $draft->overview }}</textarea>
            </div>
            <div>
                <h2>背景（null可）</h2>
                <textarea name="background">{{ $draft->background }}</textarea>
            </div>
            <div>
                <h2>機能（null可）</h2>
                <textarea name="function">{{ $draft->functions }}</textarea>
            </div>
            <div>
                <h2>プログラミング経験（null可）</h2>
                <textarea name="experience">{{ $draft->experience }}</textarea>
            </div>
            <div>
                <h2>スライド（null可）</h2>
                <textarea name="slide">{{ $draft->slide }}</textarea>
            </div>
            <div>
                <h2>使い方（null可）</h2>
                <textarea name="usage">{{ $draft->usage }}</textarea>
            </div>
            <div>
                <h2>youtubeに動画をアップした方はurlを教えてください（null可）</h2>
                <input name="movie_url" value="{{ $draft->movie_url }}"/>
            </div>
            <div>
                <h2>githubのurl（null可）</h2>
                <input name="github_url" value="{{ $draft->github_url }}"/>
            </div>
            <div>
                <select name="tags[]" class="custom-select" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="hidden" name="draft" value="{{ $draft->id }}"/>
            </div>
            <div>
                <input type="submit" value="保存"/>
            </div>
        </form>
    </body>
</html>
