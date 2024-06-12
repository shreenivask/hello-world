<?php

declare(strict_types=1);

namespace \HelloWorld\Tests;

use Shreenivask\HelloWorld\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHello(): void
    {
        $helloWorld = new HelloWorld();

        self::assertSame('Hello World!', $helloWorld->hello());
    }
}
