<?php

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    protected function getPackageProviders($app)
    {
        return [
            \Oaattia\MissingTranslation\MissingTranslationServiceProvider::class,
        ];
    }
}
