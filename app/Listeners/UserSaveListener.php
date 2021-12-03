<?php

namespace App\Listeners;
use App\Events\UserSaved;

class UserSaveListener
{
    public function __construct()
    {
        //
    }

    public function handle(UserSaved $event)
    {
        $a = 1;
        $b = 2;
        echo 'hand UserSaved';
        //
    }
}
