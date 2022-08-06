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
        $tags = ["投稿機能","詳細表示機能","投稿編集機能","投稿削除機能","画像投稿機能","ログイン機能","アソシエーション","Resources","マイページ作成","検索機能","いいね機能","コメント機能","閲覧制限","デプロイ","ページネーション","XAMPPについて","Windowsの環境構築","Macの環境構築","星評価機能","管理者権限","SNS認証","DM機能","フォロー機能","いいねのランキング機能","find,find_by,whereメソッド","入力フィールド一覧","created_atの表記変更","投稿の並び替え","投稿の分類","アソシエーション","タグ機能","seedの使い方","動画投稿機能","動画投稿(youtubeのリンク)","音声投稿","GoogleMapの表示","GoogleMapの活用","便利ツール","CSSの基礎を学ぶ","背景画像表示","@keyframesを使える",":hoverを使える","枠線を自由に設定できる","favicon","Fontawesomeの使い方","英語はみ出さないように","kaminariにCSS適用","CSSテンプレート","レスポンシブデザイン","JSの基礎","JSの基礎2","JSの基礎3","JSを使ってToDo管理リストが作れる","JSを使ってクイズが作れる","APIの利用（基礎編）","メーラーの開き方","タグ検索機能","PV数の測定","ネストフォーム","カレンダー機能","画像にリンクつける","都道府県CSS","スライドショー","ハンバーガーメニュー","現在地を取得する"];
        foreach($tags as $tag)
        {
            Tag::create([
                'name' => $tag
            ]);
        }
    }
}
