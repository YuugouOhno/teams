<x-app-layout>

<div id="portfolio">
    <h2 class="text-white text-center md:text-6xl font-serif pt-7 text-5xl">PORTFOLIO</h2>
</div><!--/#home-->    

<body>
    <input type="checkbox" class="check fade" id="checked-fade">
    <label class="switch fade" for="checked-fade"></label>
    <div class="gatefold">
    
        <div class="max-w-7xl sm:grid sm:grid-cols-3 sm:gap-6 sm:mx-auto sm:my-6 mx-3 my-3">
        @foreach($items as $item)
            <div class="border border-solid rounded border-gray-300 px-6 py-4 sm:mb-0 mb-6 bg-white">
                <h2 class="text-xl font-bold mb-2"><a href="/portfolio/{{ $item->id }}">
                    {{ $item->title }}
                </h2></a>
                <a href="/portfolio/{{ $item->id }}">
                    
                    <img class="mb-2 hover-bright" src="{{$item->image_path}}">
                    <div>{{ $item->image_path ?: '画像が存在しません' }}</div>
                </a>
                <h2 class="text-gray-600 text-sm text-left mb-2">
                    {{ $item->overview }}
                </h2>
                <h2>
                    @foreach($item->tags as $tag)
                        <a href="/?tags%5B%5D={{ $tag->name }}" class="text-blue-600 hover:text-blue-800">
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
