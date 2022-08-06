<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ポートフォリオ投稿ページ
        </h2>
    </x-slot>
    <body>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                <!-- text - start -->
                <div class="mb-10 md:mb-16">
                    <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">ポートフォリオをみんなに公開しよう！</h2>

                    <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">以下の記述欄にポートフォリの詳細を記述してください。メンターが確認後、ポートフォリオ一覧ページに投稿いたします。</p>
                </div>
                <!-- text - end -->

                <!-- form - start -->
                <form action ="/store" method="POST" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
                    @csrf
                    <div class="sm:col-span-2">
                        <label for="developer" class="inline-block text-gray-800 text-sm sm:text-base mb-2">開発者*</label>
                        <input name="developer" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="mentor" class="inline-block text-gray-800 text-sm sm:text-base mb-2">担当メンター*</label>
                        <input name="mentor" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">アプリタイトル*</label>
                        <input name="title" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="deploy_url" class="inline-block text-gray-800 text-sm sm:text-base mb-2">デプロイしたアプリのURL*</label>
                        <input name="deploy_url" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="overview" class="inline-block text-gray-800 text-sm sm:text-base mb-2">概要*</label>
                        <textarea name="overview" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="background" class="inline-block text-gray-800 text-sm sm:text-base mb-2">背景</label>
                        <textarea name="background" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="function" class="inline-block text-gray-800 text-sm sm:text-base mb-2">機能</label>
                        <textarea name="function" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="slide" class="inline-block text-gray-800 text-sm sm:text-base mb-2">スライド</label>
                        <textarea name="slide" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="usage" class="inline-block text-gray-800 text-sm sm:text-base mb-2">使い方</label>
                        <textarea name="usage" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="movie_url" class="inline-block text-gray-800 text-sm sm:text-base mb-2">youtubeに動画をアップした方はurlを教えてください</label>
                        <textarea name="movie_url" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="github_url" class="inline-block text-gray-800 text-sm sm:text-base mb-2">githubのurl</label>
                        <textarea name="github_url" class="w-full h-32 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2 flex justify-between items-center">
                        <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">投稿</button>

                        <span class="text-gray-500 text-sm">*必須項目</span>
                    </div>
                </form>
                <!-- form - end -->
            </div>
        </div>
    </body>
</x-app-layout>
