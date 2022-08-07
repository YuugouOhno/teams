<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            認証待ちポートフォリオ一覧ページ
        </h2>
    </x-slot>
    <body>
        <div class="px-10 pt-5">
            <h1 class="font-bold">ポートフォリオ投稿ページ</h1>
        </div>
            <div class="px-14 pt-5">

                <form action ="/admin/store" method="POST">
                @csrf
                <div class="p-2">
                    <h2 class="font-bold py-1">タイトル</h2>
                    <input class="bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none px-3 py-2" type="title" name="title" value="{{ $draft->title }}"/>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">デプロイしたアプリのURL</h2>
                    <input class="bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none  px-3 py-2" name="deploy_url" value="{{ $draft->deploy_url }}"/>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">概要</h2>
                    <textarea name="overview">{{ $draft->overview }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">背景（null可）</h2>
                    <textarea name="background">{{ $draft->background }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">機能（null可）</h2>
                    <textarea name="function">{{ $draft->functions }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">プログラミング経験（null可）</h2>
                    <textarea name="experience">{{ $draft->experience }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">スライド（null可）</h2>
                    <textarea name="slide">{{ $draft->slide }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">使い方（null可）</h2>
                    <textarea name="usage">{{ $draft->usage }}</textarea>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">youtubeに動画をアップした方はurlを教えてください（null可）</h2>
                    <input name="movie_url" value="{{ $draft->movie_url }}"/>
                </div>
                <div class="p-2">
                    <h2 class="font-bold py-1">githubのurl（null可）</h2>
                    <input name="github_url" value="{{ $draft->github_url }}"/>
                </div>
                <div class="p-2">
                    <select name="tags[]" class="custom-select" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="p-2">
                    <input type="hidden" name="draft" value="{{ $draft->id }}"/>
                </div>
                <div class="p-2 pb-20">
                    <button class="bg-indigo-400 px-5 py-2 rounded-md hover:bg-indigo-500 duration-100" type="submit">保存</button>
                </div>
            </form>

        </div>
    </body>
</x-app-layout>
