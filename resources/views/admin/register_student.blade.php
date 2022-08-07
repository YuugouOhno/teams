<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            認証待ちポートフォリオ一覧ページ
        </h2>
    </x-slot>
<body>
  <form action="/admin/store_student" method="POST">
    @csrf
    <div class="flex">
        <div>
            <h1>名前 : </h1>
        </div>
        <div>
            <select name="student[month]">
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

            <select name="student[term]">
                <option value="E">前期</option>
                <option value="L">後期</option>
            </select>

        </div>
    </div>
    <button type="submit">送信</button>
  </form>
</body>
</x-app-layout>
