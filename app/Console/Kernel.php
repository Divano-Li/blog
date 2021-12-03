<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\CustomCmd::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $filePath = base_path()."\outputfile.txt";
        //为啥没有每隔一分钟执行一次，只执行了一次
        $schedule->command('custom:hello')-> everyMinute()->sendOutputTo($filePath);
        //并没有得到执行， 为啥呢？
        $schedule->exec('echo helloworld')->everyMinute() ->sendOutputTo($filePath);
    }
}
