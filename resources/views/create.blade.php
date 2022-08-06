<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿ページ
        </h2>
    </x-slot>
    <body>
        <h1>ポートフォリオ投稿ページ</h1>
        <form action ="/store" method="POST">
            @csrf
            <div>
                <h2>開発者</h2>
                <input type="title" name="developer" placeholder="開発者名"/>
            </div>
            <div>
                <h2>担当メンター</h2>
                <input type="title" name="mentor" placeholder="担当メンター"/>
            </div>
            <div>
                <h2>タイトル</h2>
                <input type="title" name="title" placeholder="タイトル"/>
            </div>
            <div>
                <h2>デプロイしたアプリのURL</h2>
                <input name="deploy_url" placeholder="https:example.com"/>
            </div>
            <div>
                <h2>概要</h2>
                <textarea name="overview" placeholder="簡単に概要を書いてください"></textarea>
            </div>
            <div>
                <h2>背景（null可）</h2>
                <textarea name="background" placeholder="アプリを作った背景を入力してください"></textarea>
            </div>
            <div>
                <h2>機能（null可）</h2>
                <textarea name="function" placeholder="アプリに実装した機能を教えてください"></textarea>
            </div>
            <div>
                <h2>プログラミング経験（null可）</h2>
                <textarea name="experience" placeholder="プログラミング経験を教えてください"></textarea>
            </div>
            <div>
                <h2>スライド（null可）</h2>
                <textarea name="slide" placeholder="スライドURLを乗せれば良いのでしょうか？"></textarea>
            </div>
            <div>
                <h2>使い方（null可）</h2>
                <textarea name="usage" placeholder="アプリの使い方を教えてください"></textarea>
            </div>
            <div>
                <h2>youtubeに動画をアップした方はurlを教えてください（null可）</h2>
                <input name="movie_url" placeholder="https:example.com"/>
            </div>
            <div>
                <h2>githubのurl（null可）</h2>
                <input name="github_url" placeholder="https:example.com"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                <!-- text - start -->
                <div class="mb-10 md:mb-16">
                    <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Get in touch</h2>

                    <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
                </div>
                <!-- text - end -->

                <!-- form - start -->
                <form class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
                    <div>
                        <label for="first-name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">First name*</label>
                        <input name="first-name" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div>
                        <label for="last-name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Last name*</label>
                        <input name="last-name" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="company" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Company</label>
                        <input name="company" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Email*</label>
                        <input name="email" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="subject" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Subject*</label>
                        <input name="subject" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Message*</label>
                        <textarea name="message" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
                    </div>

                    <div class="sm:col-span-2 flex justify-between items-center">
                        <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Send</button>

                        <span class="text-gray-500 text-sm">*Required</span>
                    </div>

                    <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
                </form>
                <!-- form - end -->
            </div>
        </div>
    </body>
</x-app-layout>
