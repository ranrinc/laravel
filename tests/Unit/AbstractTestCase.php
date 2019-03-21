<?php

namespace Tests\Unit;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use PhpTelegramBot\Laravel\PhpTelegramBotServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param  \Illuminate\Contracts\Foundation\Application $app
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return PhpTelegramBotServiceProvider::class;
    }
}
