<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DuckEat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'duck:eat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will indicate the duck is eating';

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
        $controller = app()->make('App\Http\Controllers\DuckController');
        app()->call([$controller, 'eat'], []);
    
        $duck = new \App\Duck();
        $duck->ate_at = date('Y-m-d H:i:j');
        $duck->save();
    }
}
