<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            認証待ちポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    <form action="/admin/store_tag" method="POST">
        @csrf
        <div class="px-10 pt-5 ">
            <h1 class="font-bold">タグの追加</h1>
        </div>
        <div class="flex items-center px-10 py-5">

            <div class="px-4">
                <input class="rounded-md" type="text" name="name" placeholder="新規タグ名"/>
            </div>
            <div>
                <button class="bg-indigo-400 px-5 py-2 rounded-md hover:bg-indigo-500 duration-100" type="submit">送信</button>
            </div>

        </div>
    </form>

    <div class="px-10 pt-5 font-bold">
        <h1>認証待ちポートフォリオ一覧ページ</h1>
    </div>
    <div class="px-14 pt-5">
        @foreach($drafts as $draft)
            <div class="border-solid border-2 border-sky-500 mb-4">
                <h2 class="m-2">タイトル：<a class="font-bold text-indigo-400 hover:text-pink-600" href="/admin/{{ $draft->id }}">{{ $draft->title }}</a></h2>
                <h2 class="m-2">開発者：{{ $draft->developer }}</h2>
                <h2 class="m-2">担当メンター：{{ $draft->mentor }}</h2>
            </div>
        @endforeach
    </div>
</body>
</x-app-layout>
