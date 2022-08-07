<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオしょーさいページ
        </h2>
    </x-slot>
<body>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">{{$portfolio->title}}</h2>

                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">{{$portfolio->overview}}</p>
                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                    @foreach($portfolio->tags as $tag)
                        <a href="/?tags%5B%5D={{ $tag->name }}" class="text-blue-600 hover:text-blue-800">#{{ $tag->name }}</a>
                    @endforeach
                </p>

            </div>
            <!-- text - end -->

            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-8">
                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">デプロイURL</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->deploy_url}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">制作背景</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->background}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">機能説明</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->function}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">プログラミング経験</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->experience}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">使い方</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->usage}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Github</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->github_url}}</p>
                </div>
                <!-- feature - end -->
                
                <div class="g-slide flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">卒業スライド</h3>
                    <iframe src="{{ $portfolio->slide }}"></iframe>
                </div>
                
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">youtube</h3>
                    <iframe src={{'https://www.youtube.com/embed/' . $portfolio->movie_url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</x-app-layout>
