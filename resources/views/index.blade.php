<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ポートフォリオ一覧ページ</h1>
    <div>
        @foreach($items as $item)
            <h2>{{$item->title}}</h2>
        @endforeach
    </div>
</body>
</html>
