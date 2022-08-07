<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            認証待ちポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
    @if (session('flash_message'))
        <h2 class="flash_message text-red-600 font-bold">
            {{ session('flash_message') }}
        </h2>
    @endif

    <div class="px-10 pt-5 font-bold">
        <h1>入学生登録</h1>
    </div>

    <div class="px-14 py-5">

        <form action="/admin/store_student" method="POST">
            @csrf
            <div class="flex items-center">
                <div class="font-bold">
                    <h1>入学時期 :&nbsp;</h1>
                </div>
                <div>
                    <select class="rounded" name="student[month]">
                        <option value="01">1月</option>
                        <option value="02">2月</option>
                        <option value="03">3月</option>
                        <option value="04">4月</option>
                        <option value="05">5月</option>
                        <option value="06">6月</option>
                        <option value="07">7月</option>
                        <option value="08">8月</option>
                        <option value="09">9月</option>
                        <option value="10">10月</option>
                        <option value="11">11月</option>
                        <option value="12">12月</option>
                    </select>

                    <select class="rounded" name="student[term]">
                        <option value="E">前期</option>
                        <option value="L">後期</option>
                    </select>

                </div>
                <div class="px-4">
                    <button class="bg-indigo-400 px-5 py-2 rounded-md hover:bg-indigo-500 duration-100" type="submit">送信</button>
                </div>
            </div>

        </form>

    </div>

  <div>
    <p class="text-red-500">
        {{$error_message}}
    </p>
    </div>
</body>
</x-app-layout>
