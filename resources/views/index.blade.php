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
        <form action="/" method="GET">
            @csrf
            <div>
                <select name="tags[]" class="custom-select" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>
    <div>
        @foreach($items as $item)
            <h2>{{$item->title}}</h2>
        @endforeach
    </div>
</body>
</html>
