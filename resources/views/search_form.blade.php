<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            検索ページ
        </h2>
    </x-slot>
    <body>
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
    </body>
</x-app-layout>
