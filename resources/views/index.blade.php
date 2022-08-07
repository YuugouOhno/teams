<x-app-layout>

<div id="portfolio">
    <h2 class="text-white text-center md:text-6xl font-serif pt-7 text-5xl">PORTFOLIO</h2>
</div><!--/#home-->

<body>
    {{-- フラッシュメッセージ --}}
    @if (session('successMessage'))
        <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded" role="alert">
            <p class="font-bold text-center">{{ session('successMessage') }}</p>
            <p class="text-sm text-center">投稿までしばらくお待ちください！</p>
        </div>

    @endif
    {{-- フラッシュメッセージ終わり --}}
    <input type="checkbox" class="check fade" id="checked-fade">
    <label class="switch fade" for="checked-fade"></label>
    <div class="gatefold">

        <div class="max-w-6xl sm:grid sm:grid-cols-3 sm:gap-6 sm:mx-auto sm:my-6 mx-3 my-3">
        @foreach($items as $item)
            <div class="border border-solid rounded border-gray-300 px-6 py-4 sm:mb-0 mb-6 bg-white div-index">
                <h2 class="text-xl font-bold"><a href="/portfolio/{{ $item->id }}">
                    {{ $item->title }}
                </a></h2>
                <a href="/portfolio/{{ $item->id }}" class="img-index">
                <div class="flex items-center text-center" style="height: 300px">

                @if(isset($item->image_path))
                    <img class="" src="{{$item->image_path}}">
                @else
                    <div class="text-3xl m-auto">画像が存在しません</div>
                @endif

                </div>
                </a>
                <h2 class="text-gray-600 text-sm text-left mb-2"><a href="/portfolio/{{ $item->id }}">
                    {{ $item->overview }}
                </h2></a>
                <h2>
                    @foreach($item->tags as $tag)
                        <a href="/portfolio?tags%5B%5D={{ $tag->name }}" class="text-blue-600 hover:text-blue-800">
                            #{{ $tag->name }}
                        </a>
                    @endforeach
                </h2>
            </div>
        @endforeach
        </div>

    </div>
</body>
<script>
    window.onload = function(){
        let element = document.getElementById('checked-fade');
        element.checked = true;
    }
</script>
</x-app-layout>
