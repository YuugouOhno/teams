<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 初期投稿の作成
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリです。
                原発被災地である福島県葛尾村にて展示会等の活動を行う松本家計画のHPです。
                作品の情報公開、メンバー限定で掲示板利用が可能です。",
            "image_path" => "https://katsurao-diary.com/images/news/second.png",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "小学生の味方",
            'deploy_url' => "https://imposters-y-test1.herokuapp.com/",
            'overview' => "カレッジのハッカソンで出会ったチームで開発したアプリです。
                小学生の夏休みの宿題をズルして終わらせるべく、一言日記を一瞬で終わらせたり、
                計算や翻訳をちょうどよく間違える機能を有しています。",
                "image_path" => "https://imposters-y-test1.herokuapp.com/CSS/img/img_maniau.png",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "キティー流!!体重変換シミュレーター",
            'deploy_url' => "https://asagohannnnnnnnnn.herokuapp.com/",
            'overview' => "「キティー流!!体重変換シミュレーター」という私が初めて参加したハッカソンで開発したアプリケーションです。
                体重をキティー流に変換することができます。",
            "background" => "私が参加したハッカソンのテーマは思わずニヤッとするアプリでした。そこで、思わずニヤッとするとはなんだろうと考えた結果、キティちゃんのように体重をりんごやいろいろなもので例えることができたら面白いのではないかと思い、作成いたしました。",
            'slide' => 'https://docs.google.com/presentation/d/e/2PACX-1vQH281BJZqPdhoFOsoEABNtvVdcoyzw_KXK5E7wRJbhqGK1ZV1QVznN0N4LsK9gHNdrJ_gAjbvyNwpg/embed?start=false&loop=false&delayms=3000',
            'function' => '自分の体重を入力すると、さまざまなものの重さに変換することができます。左側のボタンを押すとランダムで変換されていくので、色々試して遊んでみてください',
            'experience' => '全員がハッカソン初体験でした。私もハッカソンに参加した時はカレッジに入りたてでLaravelのこともほとんどわからないような状態でのスタートだったと思います。',
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => " Jugglink",
            'deploy_url' => "https://jugglink.herokuapp.com/",
            'overview' => "「Jugglink」という私が初めて制作したWebアプリケーションです。
                ジャグリングをする人向けの動画投稿サイトとして開発しました。
                ジャグリングの道具や技などの要素で絞り込み検索が可能です。",
            "image_path" => "https://jugglinkbucket.s3.amazonaws.com/jugglink_icon/minil.PNG",
            "movie_url" => "8ewXZYsFyoM",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家架空日記",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家架空日記」は参加型作品の一部です。
                「人に住まれなくなった原発被災地域の家」を題材にした展示を企画しており、
                題材とされている家に関する架空の日記を来訪者自身が投稿することができます。",
            "image_path" => "https://katsurao-diary.com/images/bookcover.jpg",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "レバテックギャラリー",
            'deploy_url' => "https://levtech_gallery.herokuapp.com/",
            'overview' => "「レバテックギャラリー」というメンターチームで制作したWebアプリケーションです。
                レバテックカレッジの過去の生徒が作成した成果物を一覧で見ることが可能です。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);

    }
}
