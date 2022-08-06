<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    <h1>ポートフォリオ一覧ページ</h1>
    <div class="border-solid border-2 border-sky-500">
        @foreach($items as $item)
            <h2>タイトル：<a href="/portfolio/{{ $item->id }}">{{ $item->title }}</a></h2>
            <h2>デプロイURL{{ $item->deploy_url }}</h2>
            <h2>概要：{{ $item->overview }}</h2>
        @endforeach
    </div>
</body>
</x-app-layout>
