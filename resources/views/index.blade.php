<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    @foreach($items as $item)
        <div class="border-solid border-2 border-sky-900 mb-4">
            <h2>タイトル：<a href="/portfolio/{{ $item->id }}" class="text-blue-600 hover:text-blue-800">{{ $item->title }}</a></h2>
            <h2>デプロイURL{{ $item->deploy_url }}</h2>
            <h2>概要：{{ $item->overview }}</h2>
            <h2>タグ：
                @foreach($item->tags as $tag)
                    <a href="/?tags%5B%5D={{ $tag->name }}" class="text-blue-600 hover:text-blue-800">#{{ $tag->name }}</a>
                @endforeach
            </h2>
        </div>
    @endforeach
</body>
</x-app-layout>
