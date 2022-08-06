<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            認証待ちポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    <form action="/admin/store_tag" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="新規タグ名"/>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    <h1>認証待ちポートフォリオ一覧ページ</h1>
    @foreach($drafts as $draft)
        <div class="border-solid border-2 border-sky-500 mb-4">
            <h2>タイトル：<a href="/admin/{{ $draft->id }}">{{ $draft->title }}</a></h2>
            <h2>開発者：{{ $draft->developer }}</h2>
            <h2>担当メンター：{{ $draft->mentor }}</h2>
        </div>
    @endforeach
</body>
</x-app-layout>
