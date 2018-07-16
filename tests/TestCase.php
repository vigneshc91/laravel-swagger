<?php

namespace Vigneshc91\LaravelSwagger\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Vigneshc91\LaravelSwagger\SwaggerServiceProvider'];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('/users', 'Vigneshc91\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@index');
        $app['router']->get('/users/{id}', 'Vigneshc91\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@show');
        $app['router']->post('/users', 'Vigneshc91\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@store');
        $app['router']->get('/api', 'Vigneshc91\\LaravelSwagger\\Tests\\Stubs\\Controllers\\ApiController@index');
        $app['router']->put('/api/store', 'Vigneshc91\\LaravelSwagger\\Tests\\Stubs\\Controllers\\ApiController@store');
    }
}
