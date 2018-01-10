<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use HelloWorld\SayHello;

final class SayHelloTest extends TestCase
{
    public function testSayHelloResultIstString()
    {
        $this->assertEquals(
            'Hello World!',
            SayHello::World()
        );
    }
}

