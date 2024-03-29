<x-app-layout>

<div id="portfolio">
    <h2 class="text-white text-center md:text-6xl font-serif pt-7 text-5xl">PORTFOLIO</h2>
</div><!--/#home-->

<body>
    <div class="bg-gray-100 py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">{{$portfolio->title}}</h2>

                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">{{$portfolio->overview}}</p>
                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                    @foreach($portfolio->tags as $tag)
                        <a href="/portfolio?tags%5B%5D={{ $tag->name }}" class="text-blue-600 hover:text-blue-800">#{{ $tag->name }}</a>
                    @endforeach
                </p>

            </div>
            <!-- text - end -->

            <div class="max-w-7xl grid sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-8 sm:mx-auto sm:my-6 mx-3 my-3">

                <!-- feature - start -->
                <div class="flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">制作背景</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->background}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">機能説明</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->function}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">プログラミング経験</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->experience}}</p>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">制作時間</h3>
                    <p class="text-gray-500 mb-4">{{$portfolio->creation_time}}</p>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">URL</h3>
                    <p class="text-black">デプロイ先</p>
                    <a href="{{$portfolio->deploy_url}}">
                    <p class="text-gray-500 mb-2">{{$portfolio->deploy_url}}</p></a>
                    <p class="text-black">GitHub</p>
                    <a href="{{$portfolio->github_url}}">
                    <p class="text-gray-500 mb-2">{{$portfolio->github_url}}</p></a>
                </div>
                <!-- feature - end -->


                <div class="g-slide flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">卒業スライド</h3>
                    <iframe src="{{ $portfolio->slide }}"></iframe>
                </div>

                <div class="flex flex-col bg-white border rounded-lg p-4 md:p-6">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">youtube</h3>
                    <iframe src={{'https://www.youtube.com/embed/' . $portfolio->movie_url}} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-8 xl:mb-12">コメント</h2>

            <div class="flex justify-between items-center border-t border-b py-4 mb-4">
                <div class="flex flex-col gap-0.5">
                    <span class="block font-bold">合計コメント数</span>

                    <span class="block text-gray-500 text-sm">{{ $portfolio_count }}件</span>
                </div>

                <a href="#comment_form" class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 border text-gray-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 md:px-8 py-2 md:py-3">コメントを書く</a>
            </div>

            <div class="divide-y ">
                <!-- review - start -->
                @foreach($portfolio->comments as $comment)
                <div class="flex flex-col bg-white gap-3 py-4 md:py-8 bg-gray-100">
                    <div>
                        @if($comment->role == 1)
                            <span class="block text-sm font-bold">メンター</span>
                        @else
                            <span class="block text-sm font-bold">生徒</span>
                        @endif
                        <span class="block text-gray-500 text-sm">{{ $comment->created_at }}</span>
                    </div>

                    <p class="text-gray-600">{{ $comment->body }}</p>
                </div>
                @endforeach
                <!-- review - end -->

                <!-- form - start -->
                <div class="gap-3 py-8 md:py-12">
                    <form action ="/store_comment" method="POST" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto" id="comment_form">
                        @csrf
                        <div class="sm:col-span-2">
                            <label for="body" class="inline-block text-gray-800 text-sm sm:text-base mb-2">コメント作成</label>
                            <textarea name="body" class="w-full h-32 bg-white text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                            <input type="hidden" name="portfolio_id" value="{{ $portfolio->id }}"/>
                        </div>

                        <div class="sm:col-span-2 flex justify-between items-center">
                            <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">投稿</button>
                        </div>
                    </form>
                </div>
                <!-- form - end -->
            </div>
            <!-- form - start -->
        </div>
    </div>
</body>
</x-app-layout>
