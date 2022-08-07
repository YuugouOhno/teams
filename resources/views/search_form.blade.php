<x-app-layout>

<div id="portfolio">
    <h2 class="text-white text-center md:text-6xl font-serif pt-7 text-5xl">SEARCH</h2>
</div><!--/#home-->

    <body>
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <div class="my-3 sm:my-6">
                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                    選択したすべてのタグに合致するポートフォリオを表示します。
                </p>
            </div>
            <form action="/" method="GET">
                @csrf
                <div class="flex justify-center">
                    <select name="tags[]" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-2/3 p-2.5" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-600 hover:bg-blue-500 text-white rounded px-4 py-2" type="submit">検索</button>
                </div>
            </form>
        </div>
    </body>
</x-app-layout>
