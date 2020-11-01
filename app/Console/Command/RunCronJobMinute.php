<?php


namespace App\Console\Command;

use Illuminate\Console\Command;

class RunCronJobMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email about 5 minutes before the end of the reservation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $a = '1 minute';
        return view('cms.home', compact('a'));
    }
}
