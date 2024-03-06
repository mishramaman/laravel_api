<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show Database name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info(DB::connection()->getDatabaseName());
    }
}
