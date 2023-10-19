<?php
/*
 * Copyright (c) 2023. Dilshod Tursimatov
 * Github: @dasturchiuz
 * Twitter: @dasturchiuz
 *
 */

namespace Dasturchiuz\LaravelAdminLogin;

use Encore\Admin\Extension;

class LaravelAdminLogin extends Extension
{
    public $name = 'laravel-admin-login';

    public $views = __DIR__.'/../resources/views';
    public $assets = __DIR__.'/../resources/assets';
}
