<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLog()
    {
        Log::info("Hello Info");
        Log::warning("Hello Warning");
        Log::error("Hello error");
        Log::critical("Hello critical");

        self::assertTrue(true);
    }

    public function testContext()
    {
        Log::info("Hello Context", ["user" => "Christian"]);
        self::assertTrue(true);
    }

    public function testWithContext()
    {
        Log::withContext(["user" => "Christian"]);

        Log::info("Hello Info");
        Log::warning("Hello Warning");
        self::assertTrue(true);
    }
}   
