<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IPTest extends TestCase
{
    public function testCanBeCreatedFromValidIP(): void
    {
        $this->assertInstanceOf(
            IP::class,
            IP::fromString('178.64.12.22')
        );
    }

    public function testCannotBeCreatedFromInvalidIP(): void
    {
        $this->expectException(InvalidArgumentException::class);

        IP::fromString('178.64.12.22');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            '178.64.12.22',
            IP::fromString('178.64.12.22')
        );
    }
}