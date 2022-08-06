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
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolios')->insert([
            'title' => "松本家通信",
            'deploy_url' => "https://katsurao-diary.com/",
            'overview' => "「松本家通信」という私が初めて制作したWebアプリケーションです。
                原発被災地である福島県葛尾村にて展示会などの活動を行っている
                松本家計画のホームページとして制作しました。
                作品等の情報公開機能およびメンバー限定の掲示板機能を有しています。",
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        
    }
}
