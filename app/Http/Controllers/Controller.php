<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        View::share([
            'homeUrl' => url('/'),
        ]);
    }
}
