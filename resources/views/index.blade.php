<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    <h1>ポートフォリオ一覧ページ</h1>
    <div>
        <form action="/" method="GET">
            @csrf
            <div>
                <select name="tags[]" class="custom-select" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2" type="submit">検索</button>
            </div>
        </form>
    </div>
        @foreach($items as $item)
            <div class="border-solid border-2 border-sky-900 mb-4">
                <h2>タイトル：<a href="/portfolio/{{ $item->id }}" class="text-blue-600 hover:text-blue-800">{{ $item->title }}</a></h2>
                <h2>デプロイURL{{ $item->deploy_url }}</h2>
                <h2>概要：{{ $item->overview }}</h2>
                <h2>タグ：
                    @foreach($item->tags as $tag)
                        <a href="" class="text-blue-600 hover:text-blue-800">#{{ $tag->name }}</a>
                    @endforeach
                </h2>
            </div>
        @endforeach
</body>
</x-app-layout>
