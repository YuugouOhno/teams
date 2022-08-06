<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
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


    public $month = 5;
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dt = new Carbon();
        $remaining_period = $dt->subMonth($this->month);

        $deleted_users = User::where("created_at", "<" , $remaining_period)->where("role", "!=", 1);
        $this->info("==========================deleted user==========================");
        $this->info($deleted_users->get("name"));
        $deleted_users->delete();
    }
}
