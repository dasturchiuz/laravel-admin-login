<?php
/*
 * Copyright (c) 2023. Dilshod Tursimatov
 * Github: @dasturchiuz
 * Twitter: @dasturchiuz
 *
 *
 */
namespace Dasturchiuz\LaravelAdminLogin\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class LaravelAdminLoginController extends Controller{
    public function getLogin() {
        return view("laravel-admin-login::login");
    }
}


