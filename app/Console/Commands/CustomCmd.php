<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomCmd extends Command
{
    protected $signature = 'custom:hello';

    protected $description = 'A Test Command';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle() {
        $this -> info('Display this on the screen');
        echo 'hello world';
    }
}
