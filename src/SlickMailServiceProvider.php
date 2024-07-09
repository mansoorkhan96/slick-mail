<?php

namespace Mansoor\SlickMail;

use Illuminate\Support\ServiceProvider;

class SlickMailServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/slick-mail.php' => config_path('slick-mail.php'),
        ], 'slick-mail-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/slick-mail'),
        ], 'slick-mail-views');
    }
}
