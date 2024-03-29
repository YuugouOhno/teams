<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者ユーザーの作成
        DB::table('users')->insert([
            'name' => config('app.admin_name'),
            'password' => bcrypt(config('app.admin_password')),
            'role' => 1,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'test1',
            'password' => "password",
            'role' => 4,
            "created_at" => date("2022-08-06 17:53:21"),
            "updated_at" => date("2022-08-06 17:53:21"),
        ]);
        DB::table('users')->insert([
            'name' => 'test2',
            'password' => "password",
            'role' => 4,
            "created_at" => date("2022-04-05 17:53:21"),
            "updated_at" => date("2022-04-05 17:53:21"),
        ]);
        DB::table('users')->insert([
            'name' => 'test3',
            'password' => "password",
            'role' => 4,
            "created_at" => date("2022-04-05 17:53:21"),
            "updated_at" => date("2022-04-05 17:53:21"),
        ]);
        DB::table('users')->insert([
            'name' => 'test4',
            'password' => "password",
            'role' => 4,
            "created_at" => date("2022-03-05 17:53:21"),
            "updated_at" => date("2022-03-05 17:53:21"),
        ]);
    }
}
