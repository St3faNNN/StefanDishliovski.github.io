<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('portfolio:status', function () {
    $this->comment('Portfolio application is ready.');
})->purpose('Display the portfolio application status');
