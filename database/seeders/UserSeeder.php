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
            'email' => config('app.admin_email'),
            'password' => bcrypt(config('app.admin_password')),
            'role' => 1,
        ]);
    }
}
