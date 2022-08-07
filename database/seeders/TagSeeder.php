<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["リアルタイム通信","CRUD","管理者機能","検索機能","FullCarenlar","Bootstrap","React.js","Vue.js","レスポンシブ","S3","Google Map API","Twitter API","LINE API","Google Calendar API","Wether API","Slack API","定時実行処理","Typescript","無限スクロール","組み込み","いいね","フォロー機能","画像合成","モーダル"];
        foreach($tags as $tag)
        {
            Tag::create([
                'name' => $tag
            ]);
        }
    }
}
