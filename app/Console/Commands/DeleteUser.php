<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ユーザー削除用のコマンド';


    public $message = "これはテストです。";
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->info(User::all()->name);
    }
}
