<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Postmark\PostmarkClient;

class modify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:modify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //use this to do something from the CL
    }
}
