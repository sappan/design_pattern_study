<?php

namespace Tests\Unit;

use App\Services\Singleton\NoSingleton;
use App\Services\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_singleton()
    {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();
        if ($singleton1 === $singleton2) {
            echo "Singleton 实例相等" . PHP_EOL;
        } else {
            echo "Singleton 不相等" . PHP_EOL;
        }
        $this->assertTrue(true);
    }

    public function test_no_singleton()
    {
        $singleton1 = new NoSingleton();
        $singleton2 = new NoSingleton();
        if ($singleton1 === $singleton2) {
            echo "NoSingleton 实例相等" . PHP_EOL;
        } else {
            echo "NoSingleton 不相等" . PHP_EOL;
        }
        $this->assertTrue(true);
    }
}
