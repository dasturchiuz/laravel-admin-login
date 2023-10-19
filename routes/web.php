<?php

use Dasturchiuz\LaravelAdminLogin\Http\Controllers\LaravelAdminLoginController;

Route::get('auth/login', LaravelAdminLoginController::class.'@getLogin');
