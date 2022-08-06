<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 1,
            "tag_id" => 1,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 2,
            "tag_id" => 2,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 3,
            "tag_id" => 3,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 4,
            "tag_id" => 4,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 5,
            "tag_id" => 5,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 6,
            "tag_id" => 6,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 1,
            "tag_id" => 7,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 3,
            "tag_id" => 8,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('portfolio_tag')->insert([
            "portfolio_id" => 5,
            "tag_id" => 9,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
    }
}
