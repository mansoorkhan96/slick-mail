<?php

namespace Mansoor\SlickMail\Tests;

use Mansoor\SlickMail\SlickMailServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SlickMailServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        /*
        $migration = include __DIR__.'/../database/migrations/create_slick-mail_table.php.stub';
        $migration->up();
        */
    }
}
