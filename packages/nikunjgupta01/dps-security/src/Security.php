<?php

namespace Cryptonix\Roles;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class Security
{
    public function refreshDB()
    {
        Artisan::class("migrate:fresh");
        $output = Artisan::output();
        return $output;
    }
}
