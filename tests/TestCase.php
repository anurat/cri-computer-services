<?php

namespace CRI\Tests;

use CRI\ComputerServicesServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestCase extends OrchestraTestCase
{
    // protected $loadEnvironmentVariables = true;
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // $config = require __DIR__ . '/config/database.php';

        // $db = new DB();
        // $db->addConnection($config[getenv('DB_CONNECTION')] ?: 'sqlite');
        // $db->setAsGlobal();
        // $db->bootEloquent();
    }

    protected function getPackageProviders($app)
    {
        return [
            ComputerServicesServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
