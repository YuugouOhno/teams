<x-app-layout>

<div id="portfolio">
    <h2 class="text-white text-center md:text-6xl font-serif pt-7 text-5xl">PORTFOLIO</h2>
</div><!--/#home-->    

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

            <div class="max-w-7xl grid sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-8 sm:mx-auto sm:my-6 mx-3 my-3">

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
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Googleスライド</h3>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">URL</h3>
                    <p class="text-black">デプロイ先</p>
                    <a href="{{$portfolio->deploy_url}}">
                    <p class="text-gray-500 mb-2">{{$portfolio->deploy_url}}</p></a>
                    <p class="text-black">GitHub</p>
                    <a href="{{$portfolio->github_url}}">
                    <p class="text-gray-500 mb-2">{{$portfolio->github_url}}</p></a>
                </div>
                <!-- feature - end -->

                <!-- feature - end -->
                <div class="flex flex-col border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">youtube</h3>
                    <iframe src={{'https://www.youtube.com/embed/' . $portfolio->movie_url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</x-app-layout>
