<?php

namespace Mtpal\CrudGenerator\Tests;

use Mtpal\CrudGenerator\Facades\CrudGenerator;
use Mtpal\CrudGenerator\ServiceProvider;
use Orchestra\Testbench\TestCase;

class CrudGeneratorTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'crud-generator' => CrudGenerator::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
