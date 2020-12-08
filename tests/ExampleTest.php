<?php

namespace InvataProgramare\Novelist\Tests;

use Orchestra\Testbench\TestCase;
use InvataProgramare\Novelist\NovelistServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [NovelistServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
