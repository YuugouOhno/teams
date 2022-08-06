<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    <h1>ポートフォリオ一覧ページ</h1>
<<<<<<< HEAD
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
=======
    <div class="border-solid border-2 border-sky-500">
>>>>>>> 33fb7a915fe05770980f25ceafb6d78e99e6d2d1
        @foreach($items as $item)
            <h2>タイトル：<a href="/portfolio/{{ $item->id }}">{{ $item->title }}</a></h2>
            <h2>デプロイURL{{ $item->deploy_url }}</h2>
            <h2>概要：{{ $item->overview }}</h2>
        @endforeach
    </div>
</body>
</x-app-layout>
